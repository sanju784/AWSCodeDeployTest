<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchHospitalController extends SearchController
{
    public function index($checkupCategory)
    {
        $paramLinkJuice = ['cat' => $checkupCategory];
    	$this->hospital($paramLinkJuice);

    	$indexView = ($checkupCategory == 'all') ? 'index' : "course.{$checkupCategory}";
        return view("search.{$indexView}", compact('paramLinkJuice'));
    }


    public function pref($checkupCategory, $pref)
    {
    	$paramLinkJuice = ['cat' => $checkupCategory, 'pref' => $pref];
    	$this->hospital($paramLinkJuice);

    	return view('search.index', compact('paramLinkJuice'));
    }


    public function city($checkupCategory, $pref, $city)
    {
    	$paramLinkJuice = ['cat' => $checkupCategory, 'pref' => $pref, 'city' => $city];
    	$this->hospital($paramLinkJuice);

        return view('search.index', compact('paramLinkJuice'));
    }


    public function station($checkupCategory, $pref, $station)
    {
    	$paramLinkJuice = ['cat' => $checkupCategory, 'pref' => $pref, 'station' => $station];
    	$this->hospital($paramLinkJuice);
        return view('search.index', compact('paramLinkJuice'));
    }
}
