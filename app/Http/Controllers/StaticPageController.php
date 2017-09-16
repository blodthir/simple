<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function home()
    {
        return view('static_page/home');
    }
    public function findresult()
    {
        return view('static_page/findresult');
    }
    public function wikishow()
    {
        return view('static_page/wikishow');
    }
    public function pathshow()
    {
        return view('static_page/pathshow');
    }
    //
}
