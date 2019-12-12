<?php

namespace App\Http\Controllers;

use App\GeneralUser;
use Illuminate\Http\Request;

class GeneralUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function viewForgottenPassword(Request $request)
    {
        return view('forgotten-password');
    }

    public function viewResetPassword(Request $request)
    {
        return view('reset-password');
    }

    public function viewNewPassword(Request $request)
    {
        return view('new-password');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GeneralUser  $generalUser
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralUser $generalUser)
    {
        //
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
