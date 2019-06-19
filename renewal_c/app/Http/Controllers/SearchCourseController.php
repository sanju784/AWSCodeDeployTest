<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchCourseController extends SearchController
{
    public function index($checkupCategory)
    {
        $param = ['cat' => $checkupCategory];
        $this->course($param);

        return view('search.course', compact());
    }


    public function pref($checkupCategory, $pref)
    {
        $param = ['cat' => $checkupCategory, 'pref' => $pref];
        $this->course($param);

        return view('search.course', compact());
    }


    public function city($checkupCategory, $pref, $city)
    {
        $param = ['cat' => $checkupCategory, 'pref' => $pref, 'city' => $city];
        $this->course($param);

        return view('search.course', compact());
    }


    public  function station($checkupCategory, $pref, $station)
    {
        $param = ['cat' => $checkupCategory, 'pref' => $pref, 'station' => $station];
        $this->course($param);

        return view('search.course', compact());
    }
}
