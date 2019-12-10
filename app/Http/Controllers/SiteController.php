<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function viewHome(Request $request){
        return view('home');
    }

    public function viewAbout(Request $request){
        return view('about');
    }
}
