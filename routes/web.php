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

Route::get('/', "SiteController@viewHome"); 

Route::get('/sobre', "SiteController@viewAbout"); 

Route::get('/cursos', "CourseController@viewCourses");
Route::get('/cursos/{id?}', "CourseController@viewCourseDetail");

Route::get('/vagas', "VacancyController@viewVacancies");
Route::get('/vagas/{id?}', "VacancyController@viewVacancyDetail");

Route::get('/apoio', "SupportController@viewSupport");

Route::get('/contato', "SiteController@viewContact");
Route::get('/faq', "SiteController@viewContact");
Route::get('/esqueceu-a-senha', "SiteController@viewForgottenPassword"); //ou UserController (precisa checar)
Route::get('/nova-senha', "SiteController@viewResetPassword"); //ou UserController (precisa checar)
Route::post('/nova-senha', "SiteController@createNewPassword"); //ou UserController (precisa checar)

Route::get('/cadastro-usuario', "UserController@viewUserRegister");
Route::post('/cadastro-usuario', "UserController@createNewUser");

Route::get('/perfil/{id}', "UserController@viewUserProfile");
Route::get('/editar-perfil', "UserController@updateUserProfile");

Route::get('/admin', "AdminController@viewAdmin");

Route::get('/admin/cadastro-voluntario', "AdminController@viewVolunteerRegister");
Route::post('/admin/cadastro-voluntario', "AdminController@createNewVolunteer");

Route::get('/admin/cadastro-empresa', "AdminController@viewCompanyRegister");
Route::post('/admin/cadastro-empresa', "AdminController@createNewCompany");

Route::get('/admin/cadastro-doacao', "AdminController@viewDonationRegister");
Route::post('/admin/cadastro-doacao', "AdminController@createNewDonation");
