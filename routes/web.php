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

Route::get('/', "SiteController@index"); //OK
Route::get('/about', "SiteController@viewAbout"); //OK
Route::get('/contact', "SiteController@viewContact"); //OK
Route::get('/support', "SiteController@viewSupport"); //OK
Route::get('/contribute', "SiteController@viewContribute"); //OK
Route::get('/admin', "SiteController@viewAdmin");
Route::get('users/forgotten-password', 'GeneralUserController@indexForgotten'); //OK
Route::get('users/change-password', 'GeneralUserController@createNewPassword'); //depois precisamos arrumar pra puxar o id do usuário já que ele vai receber um e-mail pra resetar a senha
Route::post('users/change-password', 'GeneralUserController@updateNewPassword'); //OK

Route::resources([
  'courses' => 'CourseController', //OK
  'vacancies' => 'VacancyController', //OK
  'users' => 'GeneralUserController', //OK
  'volunteers' => 'VolunteerController', //OK
  'companies' => 'CompanyController', //OK
  'donations' => 'DonationController', //precisa criar todas as páginas nas views
]);