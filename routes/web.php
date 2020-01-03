<?php

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

use Illuminate\Support\Facades\Auth;

// Páginas Abertas
Route::get('/', "SiteController@index"); //mostra a página principal (Home)
Route::post('/', 'SiteController@logIn'); //faz login
Route::get('about', "SiteController@viewAbout");
Route::get('contact', "SiteController@viewContact");
Route::get('support', "SiteController@viewSupport");
Route::get('contribute', "SiteController@viewContribute");
Route::get('vacancies',"SiteController@viewVacancies");
Route::get('courses',"SiteController@viewCourses");
Route::get('/courses/{id}',"SiteController@showCourse");

// TODO: falta configurar
Route::get('users/forgotten-password', 'GeneralUserController@indexForgotten');
Route::get('users/change-password', 'GeneralUserController@createNewPassword');
Route::post('users/change-password', 'GeneralUserController@updateNewPassword');

// Função de deslogar
Route::get('/signout', function () {
  Auth::logout();
  return redirect('/');
});

// Páginas Fechadas
Route::get('admin', "SiteController@viewAdmin")->middleware(['auth','auth.admin']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
  Route::resource('/users','UserController',['except' => ['show','create','store']]);
  Route::resource('/companies','CompanyController');
  Route::resource('/vacancies','VacancyController');
  Route::resource('/courses','CourseController');
  Route::resource('/donations','DonationController');
  Route::resource('/volunteers','VolunteerController');
  Route::get('/impersonate/user/{id}','ImpersonateController@index')->name('impersonate');
});

Route::get('/admin/impersonate/destroy','Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');