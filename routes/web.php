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

	// Mapel
	Route::get('/kurikulum', 'KurikulumController@index')->name('kurikulum.index');
	Route::post('/kurikulum', 'KurikulumController@importKurikulum')->name('kurikulum.import');

	// Siswa
	Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
	Route::post('/siswa', 'SiswaController@importSiswa')->name('siswa.import');
	
	// Guru
	Route::get('/guru', 'GuruController@index')->name('guru.index');
	Route::post('/guru', 'GuruController@importGuru')->name('guru.import');
});

// Lock screen (sementara)
Route::get('/screenlock', function () {
	return view('screenlock');
})->name('screenlock');
