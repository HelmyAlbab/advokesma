<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;
use Illuminate\Routing\Route as RoutingRoute;

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
    return view('components.home',[
        "title"=>"Home",
        "active"=>"home"
    ]);
});
Route::get('/about', function () {
    return view('components.about',[
        "title"=>"About Us",
        "active"=>"about"
    ]);
});

Route::get('/login',[loginController::class, 'index']);

Route::get('/registrasi', [registrasiController::class, 'index']);
Route::post('/registrasi', [registrasiController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});