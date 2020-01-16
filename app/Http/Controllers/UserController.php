<?php

namespace App\Http\Controllers;

use App\{AppliedVacancy, UserCourse, Location, Role, User, Vacancy};
use App\Http\Requests\AppliedVacanciesFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash};

class UserController extends Controller
{
  /**
   * Display a listing of the users.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //Não vai existir
  }

  /**
   * Show the form for creating a new user.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    if(Auth::user()) {
      return redirect('/');
    }

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


  // TODO: falta ajustar
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
    $data['img'] = 'no-photo-icon.png'; //configura imagem default para novo usuário
    $user = User::create($data);

    $role = Role::select('id')->where('name', 'user')->first();
    $user->roles()->attach($role);

    Auth::login($user);

      
    return redirect('/');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $user = User::find($id);

    if (Auth::user()->email == $user->email) {
      return view('users.show', compact('user'));
    }

    return redirect('/');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function edit(User $user)
  {
    if (Auth::user()->email == $user->email) {
      $locations = Location::all(); //busca todos os países na base de dados locations
      return view('users.edit', compact('user','locations'));
    }

    return redirect('/');
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
    
    if ($request->hasFile('userImage')) {
      $img = $request->file('userImage');
      $name = bin2hex(random_bytes(5)) . '.' . $img->getClientOriginalExtension();
      $user->img = $name;
      $img->move(public_path('img/users'), $name);
    }

    $user->save();
    $request->session()->flash('message', 'Cadastro alterado com sucesso!');
    return redirect('users/'.$user->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    //TODO: montar excluir usuário
  }

  public function logIn(Request $request)
  {
    if (!Auth::attempt($request->only(['email', 'password']))) {
      return redirect()->back()->with('wrongLogin', 'message');
    }

    if (Auth::user()->email == 'admin@oppy.com') {
      return redirect('/admin');
    }

    return redirect()->back();
  }

  public function sendResume(AppliedVacanciesFormRequest $request)
  {
    AppliedVacancy::create([
      'name' => $request->name,
      'email' => $request->email,
      $resume = $request->file('resume'),
      $newResumeName = bin2hex(random_bytes(5)) . '.' . $resume->getClientOriginalExtension(),
      $resume->move(public_path('resume'), $newResumeName),
      'resume' => $newResumeName
    ]);

    $user = User::find(Auth::user()->id);
    $vacancy = Vacancy::select('id')->where('id', $request->vacancyId)->first();
    $user->vacancies()->attach($vacancy);

    return redirect()->back()->with('resumeSent', 'message');
  }

  public function sendCourse(UserCourse $userCourse, $id)
  {
    $course_id = $id;
    $user_id = Auth::user()->id;
    
    $userCourse->course_id = $course_id;
    $userCourse->user_id = $user_id;
    
    $userCourse->save();

    return redirect('courses');
  }
}