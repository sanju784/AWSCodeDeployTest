<?php

namespace App\Http\Controllers;

use App\Service\ApiRequestService;
use App\Enums\Pref;
use Illuminate\Support\Facades\Route;
use DebugBar;

class HospitalController extends Controller
{
    private $Api;
    private $baseInfo;
    private $contents;
    private $paramLinkJuice;

    public function __construct(ApiRequestService $apiRequestService)
    {
        $this->Api = $apiRequestService;
        $this->Api->setTTL(1200);
        $dockID = Route::current()->parameter('dockID');
        $h = $this->Api->reqAsync([
            ['path' => '/hospital/basic/', 'query' => ['hospital_code' => $dockID], 'label' => 'basic'],
            ['path' => '/hospital/contents/', 'query' => ['hospital_code' => $dockID], 'label' => 'contents']
        ]);
        $this->baseInfo = $h['basic'];
        $this->contents = $h['contents'];

        \Debugbar::info($h);

        // Not Found
        if ($this->baseInfo->status == 1) abort(404);

        $this->paramLinkJuice = ['pref' => Pref::getKey($this->baseInfo->pref_name)];
    }

    public function index($dockID)
    {
        // View is placed on detail_hospital.index

        return view('detail_hospital.index')->with([
            'baseInfo' => $this->baseInfo,
            'paramLinkJuice' => $this->paramLinkJuice
        ]);
    }


    public function calendar($dockID)
    {
        // View is placed on detail_hospital.calendar
        echo "This is {$dockID}'s calendar page.";
        $hospitalCourses = $this->Api->req( '/hospital/courses/', ['hospital_code' =>$dockID]);
        $this->hospitalCourses = $hospitalCourses;
        \DebugBar::info( $hospitalCourses);

        return view('detail_hospital.calendar.index')->with([
            'baseInfo' => $this->baseInfo,
            'hospitalCourses' => $this->hospitalCourses,
            'paramLinkJuice' => $this->paramLinkJuice
        ]);
    }


    public function access($dockID)
    {
        // View is placed on detail_hospital.access

        return view('detail_hospital.access')->with([
            'baseInfo' => $this->baseInfo,
            'paramLinkJuice' => $this->paramLinkJuice
        ]);
    }


    public function photo($dockID)
    {
        // View is placed on detail_hospital.photo

        return view('detail_hospital.photo')->with([
            'baseInfo' => $this->baseInfo,
            'paramLinkJuice' => $this->paramLinkJuice
        ]);
    }


    public function courseIndex($dockID)
    {
        $courses = $this->Api->req('hospital/courses/', ['hospital_code' => $dockID]);

        \Debugbar::info($courses->courses);

        return view('detail_hospital.course.index')->with([
            'courses' => $courses->courses,
            'baseInfo' => $this->baseInfo,
            'paramLinkJuice' => $this->paramLinkJuice
        ]);
    }


    public function course($dockID, $courseID)
    {
        // 検査コースコードでAPIを叩けるようになればこれは不要。ちなみにコースコードの書式は「"C" + course_no + "H" + hospital_no」
        preg_match("/C([0-9]+)H{$this->baseInfo->no}/", $courseID, $courseNo);

        $course = $this->Api->reqAsync([
            ['path' => 'course/basic/', 'query' => ['hospital_code' => $dockID, 'course_no' => $courseNo[1]], 'label' => 'basic'],
            ['path' => 'course/contents/', 'query' => ['hospital_code' => $dockID, 'course_no' => $courseNo[1]], 'label' => 'contents']
        ]);

        \Debugbar::info($course);

        // Not Found
        if ($course['basic']->status == 1 || $courseID != "D{$this->baseInfo->no}") abort(404);

        return view('detail_hospital.course.detail')->with([
            'courseBasic' => $course['basic'],
            'courseContents' => $course['contents'],
            'baseInfo' => $this->baseInfo,
            'paramLinkJuice' => $this->paramLinkJuice
        ]);
    }


    public function redirectCourse($dockID, $courseID)
    {
        return redirect()->action('HospitalController@course', ['dockID' => $dockID, 'courseID' => $courseID],301);
    }


    private function setBaseInfo($dockID) {
        $res = $this->Api->req('/hospital/basic/', ['hospital_code' => $dockID]);
        $this->baseInfo = json_decode(json_encode($res), true);
    }
}