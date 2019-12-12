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
Route::get('/contact', "SiteController@viewContact"); //Está tendo problema com bd
// Route::get('/esqueceu-a-senha', "SiteController@viewForgottenPassword"); //ou UserController (precisa checar)
// Route::get('/trocar-senha', "SiteController@viewResetPassword"); //ou UserController (precisa checar)
// Route::post('/nova-senha', "SiteController@createNewPassword"); //Está tendo problema com bd
Route::get('/apoio', "SiteController@viewSupport");
// Route::resource('support', 'SupportController');

Route::get('users/forgotten-password', 'GeneralUserController@indexForgotten');
Route::get('users/change-password', 'GeneralUserController@indexReset');
Route::post('users/change-password', 'GeneralUserController@createNewPassword');

Route::resources([
  'courses' => 'CourseController',
  'vacancies' => 'VacancyController',
  'register' => 'UserController',
  'users' => 'GeneralUserController',
  'volunteers' => 'VolunteerController',
  'companies' => 'CompanyController',
  'donations' => 'DonationController',
]);


Route::get('/cursos', "CourseController@viewCourses");
// Route::get('/cursos/{id?}', "CourseController@viewCourseDetail"); 
Route::get('/curso-detalhe', "CourseController@viewCourseDetail"); //deixando rota estática no momento pois precisamos do db para deixar dinâmica

Route::get('/vagas', "VacancyController@viewVacancies");
Route::get('/vagas/{id?}', "VacancyController@viewVacancyDetail");


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
