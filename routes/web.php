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

Route::get('/', "SiteController@index");
Route::get('/about', "SiteController@viewAbout");
Route::get('/contact', "SiteController@viewContact");
Route::get('/support', "SiteController@viewSupport");
Route::get('/contribute', "SiteController@viewContribute");
Route::get('/admin', "SiteController@viewAdmin");

Route::get('users/forgotten-password', 'GeneralUserController@indexForgotten');
Route::get('users/change-password', 'GeneralUserController@createNewPassword'); // TODO: depois precisamos arrumar pra puxar o id do usuário já que ele vai receber um e-mail pra resetar a senha
Route::post('users/change-password', 'GeneralUserController@updateNewPassword');

Route::resources([
  'courses' => 'CourseController',
  'vacancies' => 'VacancyController',
  'users' => 'GeneralUserController',
  'volunteers' => 'VolunteerController',
  'companies' => 'CompanyController',
  'donations' => 'DonationController', // TODO: precisa criar todas as páginas nas views
]);