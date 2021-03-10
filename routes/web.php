<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sekala;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\JadwalController;
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
    return view('layout.greetings');
});

Route::get('/home',[sekala::class,'returnView']);
Route::get('/dosen',[DosenController::class,'getAllDosenData']);
Route::get('/dosenid', function () {
    return view('data.datadosen_id');
});

//Tugas 3 ==== DOSEN ====================
Route::get('/tambahdosen',[DosenController::class,'addnew']);
Route::post('/simpandosen',[DosenController::class,'store']);
Route::get('/jadwaldosen/{id}',[DosenController::class,'jadwal']);
Route::get('/listjadwal/{id}',[JadwalController::class,'index']);
Route::get('/del/{id}',[DosenController::class,'destroy']);
Route::post('/simpanjados',[JadwalController::class,'store']);
Route::get('/editdos/{id}',[DosenController::class,'edit']);
Route::put('/updatedosen/{id}',[DosenController::class,'update']); 
//=======================================

//Tugas 3 ==== MAHASISWA ================
Route::get('/tambahmahasiswa',[MahasiswaController::class,'show']);
Route::post('/simpanmahasiswa',[MahasiswaController::class,'store']);
Route::get('/delmhs/{id}',[MahasiswaController::class,'destroy']);
Route::get('/editmhs/{id}',[MahasiswaController::class,'edit']);
Route::put('/updatemahasiswa/{id}',[MahasiswaController::class,'update']); 
//=======================================

//Tugas 3 ==== MATKUL ================
Route::get('/tambahmatkul', function () {
    return view('tambah.tambahmatkul');
});
Route::post('/simpanmatkul',[MatkulController::class,'store']);
Route::get('/editmatkul/{id}',[MatkulController::class,'edit']);
Route::put('/updatematkul/{id}',[MatkulController::class,'update']); 
//=======================================

Route::get('/dosenid/{id}',[DosenController::class,'dosenid']);
Route::get('/matkul',[MatkulController::class,'index']);
Route::get('/mahasiswa',[MahasiswaController::class,'index']);