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

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ets', function () {
    return view('htmlets');
});

Route::get('tugas4', function () {
    return view('tugas4');
});

Route::get('praktikum2', function () {
    return view('praktikum2');
});

Route::get('isiannama', "ViewController@showForm");
Route::post('greetings', "ViewController@resultGreetings");

//route CRUD
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'PegawaiController@detail');

Route::get('/tugas', 'TugasController@index');
Route::get('/tugas/tambah', 'TugasController@tambah');
Route::post('/tugas/store', 'TugasController@store');
Route::get('/tugas/edit/{id}', 'TugasController@edit');
Route::post('/tugas/update', 'TugasController@update');
Route::get('/tugas/hapus/{id}', 'TugasController@hapus');
//route CRUD absen
Route::get('/absen', 'AbsenController@indexabsen');
Route::get('/absen/add', 'AbsenController@add');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');

Route::get('/baju', 'BajuController@index');
Route::get('/baju/tambah', 'BajuController@tambah');
Route::post('/baju/store', 'BajuController@store');
Route::get('/baju/edit/{id}', 'BajuController@edit');
Route::post('/baju/update', 'BajuController@update');
Route::get('/baju/hapus/{id}', 'BajuController@hapus');
Route::get('/baju/view/{id}', 'BajuController@detail');
Route::get('/baju/cari', 'BajuController@cari');

Route::get('/karyawan1', 'Karyawan1Controller@index');
Route::get('/karyawan1/edit/{id}', 'Karyawan1Controller@edit');
Route::post('/karyawan1/update', 'Karyawan1Controller@update');
Route::get('/karyawan1/view/{id}', 'Karyawan1Controller@detail');
Route::get('/karyawan1/cari', 'Karyawan1Controller@cari');
