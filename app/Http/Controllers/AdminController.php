<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //mostra a página do administrador
    public function viewAdmin(Request $request) {
        return view('admin');
    }

}
