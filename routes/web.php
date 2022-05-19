<?php

use App\Http\Controllers\aspirasiController;
use App\Http\Controllers\aspirasiDashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\jawabanController;
use App\Http\Controllers\pertanyaanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registrasiController;
use App\Http\Controllers\topnewDashboardController;
use App\Models\topnew;


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

Route::get('/', function(){
    return view('components.home',[
        "title"=>"Home",
        "active"=>"home",
        "topnews"=>topnew::all()
    ]);
});
Route::get('/topnews/{id}', [homeController::class,'show']);
Route::get('/about', function () {
    return view('components.about',[
        "title"=>"About Us",
        "active"=>"about"
    ]);
});

Route::get('/login',[loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[loginController::class, 'auth']);
Route::post('/logout',[loginController::class, 'logout']);

Route::get('/registrasi', [registrasiController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [registrasiController::class, 'store']);

Route::get('/aspirasi',[aspirasiController::class, 'index']);
Route::post('/aspirasi',[aspirasiController::class, 'store']);
Route::get('/pertanyaan',[pertanyaanController::class, 'index']);
Route::post('/pertanyaan',[pertanyaanController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/jawaban',[jawabanController::class, 'index'])->middleware('auth');
Route::post('/dashboard/jawaban',[jawabanController::class, 'store'])->middleware('auth');

Route::resource('/dashboard/aspirasi',aspirasiDashboardController::class)->middleware('auth');

Route::resource('/dashboard/topnews',topnewDashboardController::class)->middleware('auth');
