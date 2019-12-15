<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;

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
    //lê informações das doações
    $donations = Donation::all();
    return view('admin',["donations" => $donations]);
  }
}
