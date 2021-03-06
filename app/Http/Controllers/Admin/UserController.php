<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\{Role, User};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $users = User::paginate(2);
    return view('admin.users.index', compact('users', $users));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    if (Auth::user()->id == $id) {
      return redirect()->route('admin.users.index')->with('warning', "Você não pode editar o seu próprio usuário");
    }
    $user = User::find($id);
    $roles = Role::all();

    return view('admin.users.edit', compact('user', $user, 'roles', $roles));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    if (Auth::user()->id == $id) {
      return redirect()->route('admin.users.index')->with('warning', "Você não pode editar o seu próprio usuário");
    }
    $user = User::find($id);
    $user->roles()->sync($request->roles);

    return redirect()->route('admin.users.index')->with('success', "A função da(o) usuária(o) {request->name} foi atualizada");
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    if (Auth::user()->id == $id) {
      return redirect()->route('admin.users.index')->with('warning', "Você não pode remover o seu próprio usuário");
    }

    $user = User::find($id);

    if ($user) {
      $user->roles()->detach();
      $user->delete();
      return redirect()->route('admin.users.index')->with('success', "Usuária(o) {$user->name} foi removida(o)");
    }

    return redirect()->route('admin.users.index')->with('warning', "Usuária(o) {$user->name} não pode ser removida(o)");
  }
}
