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
     * @param  \App\lUser  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return view('users.show', ["user" => $user]);
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lUser  $user
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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
      //Validate
      // $request->validate([
      //   'title' => 'required|min:3',
      //   'description' => 'required',
      // ]);
      
      $user->name = $request->userFullName;
      $user->email = $request->userEmail;
      $user->location_id = $request->userCountry;
      $user->phone = $request->userPhone;
      $user->address = $request->userAddressStr;
      $user->address_number = $request->userAddressNo;
      $user->complement = $request->userAddressComp;
      $user->zip = $request->userAddressPC;

      $user->save();
      $request->session()->flash('message', 'Cadastro alterado com sucesso!');
      return redirect('users/'.$user->id);
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lUser  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      //
    }
  }