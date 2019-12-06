<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function viewSupport(Request $request)
    {
        return view('support');
    }
}
