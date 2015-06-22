<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('post', 'PostController');
Route::resource('campus','CampusController');
Route::resource('asignaturas','AsignaturasController');
Route::resource('carreras','CarrerasController');
Route::resource('cursos','CursosController');
Route::resource('departamentos','DepartamentosController');
Route::resource('docentes','DocentesController');
Route::resource('escuelas','EscuelasController');
Route::resource('estudiantes','EstudiantesController');
Route::resource('facultades','FacultadesController');
Route::resource('funcionarios','FuncionariosController');
Route::resource('horarios','HorariosController');
Route::resource('periodos','PeriodosController');
Route::resource('roles','RolesController');
Route::resource('salas','SalasController');
Route::resource('tipos_salas','Tipos_SalasController');
