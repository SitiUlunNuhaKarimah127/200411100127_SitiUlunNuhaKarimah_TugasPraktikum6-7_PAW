<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/about', [MahasiswaController::class, 'show'])->name('aboutme');
Route::get('/', [MahasiswaController::class, 'index'])->name('home');
Route::get('/{mahasiswa:nrp}/edit', [MahasiswaController::class, 'edit'])->name('edit');
Route::post('/{mahasiswa:nrp}/edit', [MahasiswaController::class, 'update'])->name('update');
Route::delete('/{mahasiswa:nrp}', [MahasiswaController::class, 'destroy'])->name('hapus.data');
Route::get('/create', [MahasiswaController::class, 'create'])->name('create.form');
Route::post('/create', [MahasiswaController::class, 'store'])->name('create.proses');
Route::get('image/{foto}', 'HomeController@displayImage')->name('image.displayImage');

