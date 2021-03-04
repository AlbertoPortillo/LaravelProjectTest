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
Route::get('/', function () {return view('welcome');})->name('home');
//login
Route::get('/loginform', function () {return view('login');})->name('login');
Route::post('/login', 'Login@Sign');
Route::get('/logout', 'Login@Logout');

//home view
Route::get('/home', 'pacientes@readlist')->name('home-inside')->middleware('session');

//registrar pacientes
Route::get('/create-pacient', function () {return view('create-pacientes');})->name('crear-paciente')->middleware('session');
Route::post('/create-pacient', 'pacientes@create')->middleware('session');
Route::get('/edit-paciente/{id}', 'pacientes@editinfo')->name('edit-paciente')->middleware('session');
Route::post('/editar-paciente/{id}', 'pacientes@update')->name('editar-paciente')->middleware('session');

//borrar pacientes
Route::get('/delete-paciente/{id}', 'pacientes@delete')->name('delete-paciente')->middleware('session');

//Consultorio
Route::get('/consultorio-crear', function () {
    return view('create-consultorio');
})->name('crear-consultorio')->middleware('session');
Route::post('/consultorio-crear', 'consultorios@create')->name('crear-consultorio')->middleware('session');
Route::get('/edit-consultorio/{id}', 'consultorios@updateinfo')->name('edit-consultorio')->middleware('session');
Route::post('/editar-consultorio/{id}', 'consultorios@update')->name('editar-consultorio')->middleware('session');
//Citas
Route::get('/citas/{id}', 'citas@getListbyid' )->name('citas')->middleware('session');
Route::get('/create-citas/{id}', 'citas@getView')->name('crear-citas')->middleware('session');
Route::post('/crear-cita/{id}', 'citas@create')->name('create-citas')->middleware('session');
Route::get('/borrar-cita/{id}/{cita}', 'citas@delete')->name('borrar-citas')->middleware('session');
