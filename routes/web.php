<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
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

Route::get('/', [FilmController::class, 'home']);

Route::get('/data', [FilmController::class, 'data']);

Route::get('/tabel',[FilmController::class,'index']);

Route::get('/tampil',[FilmController::class,'tampil']);

Route::get('/dosen',[FilmController::class,'dosen']);

Route::get('/cari/{id}',[App\Http\Controllers\KontrolBarang::class,'cari']);