<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sekala;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
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
    return view('greetings');
});

Route::get('/home',[sekala::class,'returnView']);
Route::get('/dosen',[DosenController::class,'getAllDosenData']);
Route::get('/dosenid', function () {
    return view('datadosen_id');
});
Route::get('/dosenid/{id}',[DosenController::class,'dosenid']);
Route::get('/matkul',[MatkulController::class,'index']);
Route::get('/mahasiswa',[MahasiswaController::class,'index']);