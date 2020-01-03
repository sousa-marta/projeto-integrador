<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ImpersonateController extends Controller
{
    public function index($id)
    {
        $user = User::where('id',$id)->first();

        if($user) {
            session()->put('impersonate',$user->id);
        }

        return redirect('/');
    }

    public function destroy()
    {
        session()->forget('impersonate');
        
        return redirect('/admin');
    }
}
