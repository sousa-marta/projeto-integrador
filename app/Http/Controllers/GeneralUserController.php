<?php

namespace App\Http\Controllers;

use App\GeneralUser;
use Illuminate\Http\Request;

class GeneralUserController extends Controller
{
  /**
   * Display a listing of the users.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new user.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('users.create');
  }

  /**
   * Show the form for receiving an email and reset password.
   *
   * @return \Illuminate\Http\Response
   */
  public function indexForgotten(Request $request)
  {
    return view('users.forgotten-password');
  }

  /**
   * Show the form for creating a new password.
   *
   * @return \Illuminate\Http\Response
   */
  public function createNewPassword(Request $request)
  {
    return view('users.reset-password');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\GeneralUser  $generalUser
   * @return \Illuminate\Http\Response
   */
  public function show(GeneralUser $generalUser)
  {
    return view('users.show');
    //Assim que a página estiver dinâmica, trocar pelo código abaixo:
    //return view('users.show',compact('generalUser',$generalUser));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\GeneralUser  $generalUser
   * @return \Illuminate\Http\Response
   */
  public function edit(GeneralUser $generalUser)
  {
    return view('users.edit');
    //Assim que a página estiver dinâmica, trocar pelo código abaixo:
    //return view('users.edit',compact('generalUser',$generalUser));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\GeneralUser  $generalUser
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, GeneralUser $generalUser)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\GeneralUser  $generalUser
   * @return \Illuminate\Http\Response
   */
  public function destroy(GeneralUser $generalUser)
  {
    //
  }
}
