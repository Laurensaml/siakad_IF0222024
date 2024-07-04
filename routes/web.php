<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramStudiController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/fakultas', FakultasController::class);
Route::resource('/program-studi', ProgramStudiController::class);
Route::get('/sekolah', [App\Http\Controllers\SekolahController::class,'index']);
Route::get('/fetch-sekolah', [App\Http\Controllers\SekolahController::class,'fetchSekolah']);