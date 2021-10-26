<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SisPembayaranController;
use App\Http\Controllers\SisKaryawanController;
use App\Http\Controllers\SisSantriController;
use App\Http\Controllers\SisKelasController;

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
    // return view('auth.login');
});

Route::get('/log_in', function () {
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route Sispontren =======================================

Route::resource('pembayaran', SisPembayaranController::class);

Route::resource('karyawan', SisKaryawanController::class);

Route::resource('santri', SisSantriController::class);

Route::resource('kelas', SisKelasController::class);

Route::resource('user', SisUserController::class);
