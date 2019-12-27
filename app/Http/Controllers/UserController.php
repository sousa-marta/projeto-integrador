<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Location;
use App\User;

class UserController extends Controller
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
      return view('users.create',["locations" => $locations]);
    }
  
    /**
     * Show the form for receiving an email and reset password.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexForgotten(Request $request)
    {
      return view('users.forgotten-password');  //TODO: montar essa parte
    }
  
    /**
     * Show the form for creating a new password.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNewPassword(Request $request)
    {
      return view('users.reset-password');  //TODO: montar essa parte
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user = User::create(['name' => $request->userFullName,
                            'email' => $request->userEmail,
                            'password' => Hash::make($request->userPassword),
                            'location_id' => $request->userCountry]);
      return redirect('/users/'.$user->id);
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\GeneralUser  $generalUser
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return view('users.show', ["user" => $user]);
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GeneralUser  $generalUser
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $locations = Location::all(); //busca todos os países na base de dados locations
      return view('users.edit',["user" => $user, "locations" => $locations]);
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