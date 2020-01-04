<?php

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Páginas Abertas
Route::get('/', "SiteController@index"); //mostra a página principal (Home)
Route::post('/', 'UserController@logIn'); //faz login
Route::get('about', "SiteController@viewAbout");
Route::post('about', 'UserController@logIn'); //faz login
Route::get('contact', "SiteController@viewContact");
Route::post('contact', 'UserController@logIn'); //faz login
Route::get('support', "SiteController@viewSupport");
Route::post('support', 'UserController@logIn'); //faz login
Route::get('contribute', "SiteController@viewContribute");
Route::post('contribute', 'UserController@logIn'); //faz login
Route::get('vacancies',"SiteController@viewVacancies");
Route::post('vacancies', 'UserController@logIn'); //faz login
Route::get('courses',"SiteController@viewCourses");
Route::post('courses', 'UserController@logIn'); //faz login
Route::get('/courses/{id}',"SiteController@showCourse");

// TODO: falta configurar as 3 rotas abaixo referente à senha
Route::get('users/forgotten-password', 'GeneralUserController@indexForgotten');
Route::get('users/change-password', 'GeneralUserController@createNewPassword');
Route::post('users/change-password', 'GeneralUserController@updateNewPassword');

Route::post('/users/{id}/apply-to-vacancy', 'UserController@sendResume')->name('user.apply.vacancy')->middleware(['auth']);
Route::resource('users',"UserController");
Route::get('/users/{user}/edit',"UserController@edit")->middleware(['auth']);
Route::get('/users/{user}',"UserController@show")->middleware(['auth']);

// Função de deslogar
Route::get('/signout', function () {
  Auth::logout();
  return redirect('/');
});

// Páginas Fechadas
Route::get('admin', "SiteController@viewAdmin")->middleware(['auth','auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
  Route::resources([
  'users' => 'UserController',
  'companies' => 'CompanyController',
  'vacancies' => 'VacancyController',
  'courses' => 'CourseController',
  'donations' => 'DonationController',
  'volunteers' => 'VolunteerController'
  ]);
  Route::get('/impersonate/user/{id}','ImpersonateController@index')->name('impersonate');
});

Route::get('/admin/impersonate/destroy','Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');