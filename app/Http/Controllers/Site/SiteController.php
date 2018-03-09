<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    //

    public function index(){
        return view('pages.index');
    }

    public function notfound(){
        return view('pages.404');
    }
}
