<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HitungController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hitung',[HitungController::class,'hitungduabilangan']);
Route::get('mahasiswatugas3',[HitungController::class,'mahasiswa']);

Route::get('/mahasiswa',[App\Http\Controllers\MahasiswaController::class,'view']);
Route::get('/mahasiswa/create',[App\Http\Controllers\MahasiswaController::class,'create']);
Route::get('/mahasiswa/{mahasiswas:nim}/edit',[App\Http\Controllers\MahasiswaController::class,'edit']);
Route::post('/mahasiswa/create',[App\Http\Controllers\MahasiswaController::class,'store']);
Route::put('/mahasiswa/{mahasiswas:nim}/update',[App\Http\Controllers\MahasiswaController::class,'update']);
Route::get('/mahasiswa/{mahasiswas:nim}/delete',[App\Http\Controllers\MahasiswaController::class,'destroy']);