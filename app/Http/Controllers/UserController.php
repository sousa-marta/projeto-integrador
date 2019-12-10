<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function viewUserProfile(Request $request){
        return view('user');
    }
    //Rota visualização:cadastro-usuario
    public function viewUserRegister(Request $request){
        return view('register');
    }
    //Rota visualização: editar-perfil
    public function updateUserProfile(Request $request){
        return view('user-info');
    }
}
