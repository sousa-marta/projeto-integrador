<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //mostra a página do administrador
    public function viewAdmin(Request $request) {
        return view('admin');
    }

    //mostra a página do cadastrar voluntário
    public function viewVolunteerRegister(Request $request) {
        return view('register-volunteer');
    }

    //mostra a página do cadastrar voluntário
    public function viewCompanyRegister(Request $request) {
        return view('register-company');
    }

}
