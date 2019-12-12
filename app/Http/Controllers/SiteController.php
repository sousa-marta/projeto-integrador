<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index(Request $request)
  {
    return view('home');
  }

  public function viewAbout(Request $request)
  {
    return view('about');
  }

  public function viewSupport(Request $request)
  {
    return view('support');
  }

  public function viewContribute(Request $request)
  {
    return view('contribute');
  }

  public function viewContact(Request $request)
  {
    return view('contact');
  }

  public function viewAdmin(Request $request)
  {
    return view('admin');
  }
}
