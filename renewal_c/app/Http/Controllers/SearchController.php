<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    protected $req;
    public function __construct(SearchRequest $req)
    {
        $this->req = $req;
    }

    public function hospital($param){
        \Debugbar::info("This is a search engine of HOSPITALS.");
        \Debugbar::info($this->req->all());
        \Debugbar::info($param);

        // View is placed on search.index
    }

    public function course($param){
        \Debugbar::info("This is a search engine of COURSES.");
        \Debugbar::info($this->req->all());
        \Debugbar::info($param);

        // View is placed on search.course
    }
}
