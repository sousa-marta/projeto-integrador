<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//para buscar informações do número de cadastros na página geral de admin
use App\{Company,Course,User,Vacancy,Volunteer};
// use App\Donation;
use Illuminate\Support\Facades\Auth;

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
    $companies = Company::all();
    $volunteers = Volunteer::all();
    $users = User::all();
    $vacancies = Vacancy::all();
    $courses = Course::all();
    return view('admin',["companies" => $companies,
                         "volunteers" => $volunteers,
                         "users" => $users,
                         "vacancies" => $vacancies,
                         "courses" => $courses]);
  }

  public function entrar(Request $request)
    {
        if(!Auth::attempt($request->only(['email','password']))) {
            return redirect()->back()->withErrors('Usuário e/ou senha incorretos');
        }

        return redirect()->back();
    }
}
