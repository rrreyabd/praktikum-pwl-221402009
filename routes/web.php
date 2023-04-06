<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar_mahasiswa', [MahasiswaController::class,'index']);

Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
 
Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/postingan',[AdminController::class,'show_postingan']);
Route::get('/admin/arsip',[AdminController::class,'show_arsip']);
Route::get('/admin/akun',[AdminController::class,'show_akun']);
Route::get('/admin/peta',[AdminController::class,'show_peta']);
Route::get('/admin/statistic',[AdminController::class,'show_statistic']);
Route::get('/admin/task',[AdminController::class,'show_task']);
Route::get('/admin/time',[AdminController::class,'show_time']);

