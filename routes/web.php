<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
	return view('welcome');
})->middleware('guest');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
	// Mapel
	Route::get('/mapel', 'MapelController@index')->name('mapel.index');
	Route::post('/mapel', 'MapelController@importMapel')->name('mapel.import');

<<<<<<< HEAD
Route::get('/siswa', 'SiswaController@index')->middleware('role:admin')->name('siswa.index');
=======
	// Siswa
	Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
	Route::post('/siswa', 'SiswaController@importSiswa')->name('siswa.import');
>>>>>>> d8878073db9fc39772b84f30b4c09a18785b6fe5
});

// Lock screen (sementara)
Route::get('/screenlock', function () {
	return view('screenlock');
})->name('screenlock');
