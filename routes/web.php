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
    return view('components.home');
});
Route::get('/about', function () {
    return view('components.about');
});
Route::get('/login', function () {
    return view('loginregis.login');
});
Route::get('/registrasi', function () {
    return view('loginregis.registrasi');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});