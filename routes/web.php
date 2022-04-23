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
});

Route::get('/Opsi', function () {
    return view('Opsi');
});

Route::get('/Formisidata', function () {
    return view('Formisidata');
});

Route::get('/popupgaris3', function () {
    return view('popupgaris3');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/opsi', function () {
    return view('opsi');
});

Route::get('/isi-data', function () {
    return view('isi-data');
});

Route::get('/upload-berkas', function () {
    return view('upload-berkas');
});

Route::get('/unduh-berkas', function () {
    return view('unduh-berkas');
});

Route::get('/contact-person', function () {
    return view('contact-person');
});

Route::get('/ketentuan', function () {
    return view('ketentuan');
});