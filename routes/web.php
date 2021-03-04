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

//borrar pacientes
Route::get('/delete-paciente/{id}', 'pacientes@delete')->name('delete-paciente')->middleware('session');

//Citas
Route::get('/citas/${id}', 'citas@getListbyid' )->name('citas')->middleware('session');