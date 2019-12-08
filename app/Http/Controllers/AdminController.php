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

    //cria novo voluntário
    public function createNewVolunteer(Request $request) {
        //TODO: cria novo voluntário e registra na base de dados


    }

    //mostra a página do cadastrar empresa
    public function viewCompanyRegister(Request $request) {
        return view('register-company');
    }

    //cria nova emprea
    public function createNewCompany(Request $request) {
        //TODO: cria nova empresa e registra na base de dados

        
    }

}
