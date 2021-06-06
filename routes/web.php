<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest:web', 'guest:teacher'])->group(function () {
    Route::get("/login-form",function(){
        return view("login");
    })->name("formlogin");
});

Route::post('/login', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/guru/{id}', 'GuruController@index')->name('guru')->middleware("auth:teacher");

Route::get('/nilai/create', 'NilaiController@create')->middleware("auth:teacher");
Route::post('/nilai/store', 'NilaiController@store')->middleware("auth:teacher");

Route::get('/siswa', 'SiswaController@index')->name('siswa')->middleware("auth:web");

Route::get('/nilai/edit/{user_id}','NilaiController@edit');
Route::post('/update/{user_id}','NilaiController@update');

Route::get('/nilai/hapus/{user_id}','NilaiController@hapus');

Route::get('/datasiswa','SiswaController@datasiswa')->name('user')->middleware("auth:teacher");

Route::get('/datasiswa2','SiswaController@datasiswa2')->name('user')->middleware("auth:teacher");

Route::get('/datasiswa3','SiswaController@datasiswa3')->name('user')->middleware("auth:teacher");

Route::get('/menu','SiswaController@menu');
