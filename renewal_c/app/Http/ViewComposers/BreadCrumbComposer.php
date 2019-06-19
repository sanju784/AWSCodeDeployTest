<?php


namespace App\Http\ViewComposers;


use App\Enums\City;
use App\Enums\Pref;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BreadCrumbComposer
{
    /**
     * @var string
     */
    protected $pref;
    protected $city;
    protected $controllerVal;
    protected $request;

    public function __construct(Request $request)
    {
        $this->pref = Pref::toArray();
        $this->city = new City();
        $this->request = $request;
    }

    /**
     * Bind data to the view.
     * @param View view
     * @return void
     */
    public function compose(View $view)
    {
        $_viewName = explode('.', $view->name());
        $this->controllerVal = $view->getData();
        $breads = null;

        switch ($_viewName[0])
        {
            case 'detail_hospital':
                $breads = $this->forHospitalDetail($this->controllerVal['baseInfo'], $_viewName[1], @$_viewName[2]);
                break;

            case 'search':
                $breads = $this->forSearch();
                break;

            default:
                $breads = null;
        }

        $view->with(['breads' => $breads]);
    }


    private function forHospitalDetail($info, $viewName, $isCourseDetail)
    {


        $title = [
            'index' => '施設情報',
            'access' => 'アクセス情報',
            'calendar' => '空き枠カレンダー',
            'photo' => '動画・画像',
            'course' => '検査コース一覧'
        ];

        $_breads = [
            ['url' => 'all/'. Pref::getKey($info->pref_name), 'text' => "{$info->pref_name}の医療機関一覧"],
            ['url' => 'all/'. Pref::getKey($info->pref_name). '/'. $this->city->city($info->pref_name, $info->district_name), 'text' => "{$info->district_name}の医療機関一覧"],
        ];

        if ($viewName == 'index')
        {
            $_breads[] = ['url' => $this->request->path(), 'text' => "{$info->name}の{$title[$viewName]}"];
        }elseif($viewName == 'course' && $isCourseDetail == 'detail'){
            $_breads[] = ['url' => dirname(dirname($this->request->path())), 'text' => "{$info->name}の{$title['index']}"];
            $_breads[] = ['url' => dirname($this->request->path()), 'text' => "{$title['course']}"];
            $_breads[] = ['url' => $this->request->path(), 'text' => "{$this->controllerVal['courseBasic']->course_name}の予約・詳細情報"];
        }else{
            $_breads[] = ['url' => dirname($this->request->path()), 'text' => "{$info->name}の{$title['index']}"];
            $_breads[] = ['url' => $this->request->path(), 'text' => "{$title[$viewName]}"];
        }


        return $_breads;
    }


    private function forSearch()
    {

    }

}