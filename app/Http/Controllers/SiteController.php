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

    public function viewContact(Request $request){
        return view('contact');
    }

    public function viewForgottenPassword(Request $request){
        return view('forgotten-password');
    }

    public function viewResetPassword(Request $request){
        return view('reset-password');
    }

    public function viewNewPassword(Request $request){
        return view('new-password');
    }
}
