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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/welcome', "SiteController@viewHome"); 
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/apoio', "SupportController@viewSupport");
Route::get('/cursos', "CourseController@viewCourses");
Route::get('/usuario', "UserController@viewUser");
Route::get('/admin', "AdminController@viewAdmin");
