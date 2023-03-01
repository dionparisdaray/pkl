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

Route::get('/anggota', [FilmController::class, 'anggota']);

Route::get('/search', [FilmController::class, 'search']);

Route::get('/searchfilm', [FilmController::class, 'searchfilm']);

Route::get('/daftarfilm', [FilmController::class, 'daftarfilm']);

Route::get('/tambahfilm', [FilmController::class, 'tambahfilm']);

Route::get('/tambahanggota', [FilmController::class, 'tambahanggota']);

Route::post('/insertanggota', [FilmController::class, 'insertanggota']);

Route::post('/insertfilm', [FilmController::class, 'insertfilm']);

Route::get('/show/{id}', [FilmController::class, 'show']);

Route::get('/showfilm/{id}', [FilmController::class, 'showfilm']);

Route::post('/edit', [FilmController::class, 'edit']);

Route::post('/editfilm', [FilmController::class, 'editfilm']);

Route::get('/hapus/{id}', [FilmController::class, 'hapus']);

Route::get('/hapusfilm/{id}', [FilmController::class, 'hapusfilm']);

Route::get('/daftarfilm', [FilmController::class, 'daftarfilm']);

Route::get('/kategorifilm', [FilmController::class, 'kategorifilm']);
