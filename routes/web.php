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

Route::get('/', "SiteController@index"); //mostra a página principal (Home)
Route::post('/', 'SiteController@logIn'); //faz login
Route::get('about', "SiteController@viewAbout");
Route::get('contact', "SiteController@viewContact");
Route::get('support', "SiteController@viewSupport");
Route::get('contribute', "SiteController@viewContribute");
Route::get('admin', "SiteController@viewAdmin");

Route::get('users/forgotten-password', 'GeneralUserController@indexForgotten');
Route::get('users/change-password', 'GeneralUserController@createNewPassword'); // TODO: depois precisamos arrumar pra puxar o id do usuário já que ele vai receber um e-mail pra resetar a senha
Route::post('users/change-password', 'GeneralUserController@updateNewPassword');

Route::resources([
  'courses' => 'CourseController',
  'vacancies' => 'VacancyController',
  'users' => 'GeneralUserController', //TODO: arrumar middleware
  'volunteers' => 'VolunteerController',
  'companies' => 'CompanyController',
  'donations' => 'DonationController',
]);

Route::group(array('middleware' => 'auth'), function()
{
    Route::resource('courses', 'CourseController', ['except' => ['index']]);
    Route::resource('vacancies', 'VacancyController', ['except' => ['index']]);
});

Route::get('/admins', function(){
  return 'You are admin';
})->middleware(['auth','auth.admin']);

Route::get('/signout', function () {
  Auth::logout();
  return redirect('/');
});


Route::namespace('Admin')->prefix('admin')->middleware(['auth','auth.admin'])->name('admin.')->group(function(){
  Route::resource('/users','UserController',['except' => ['show','create','store']]);
  Route::get('/impersonate/user/{id}','ImpersonateController@index')->name('impersonate');
});

Route::get('/admin/impersonate/destroy','Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');