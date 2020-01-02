<?php

namespace App\Http\Controllers;

use App\{GeneralUser, Location, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash};

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
    $locations = Location::all(); //busca todos os países na base de dados locations
    return view('users.create', compact('locations', $locations));
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
   * Store a newly created user in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->except('_token');
    $data['password'] = Hash::make($data['password']);
    $user = User::create($data);

    Auth::login($user);

    return redirect('/');
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
