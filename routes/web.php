<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\TentangKamiController;

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
Auth::routes();
Route::get('/', function () {
    return view('beranda');
});

Route::get('beranda', BerandaController::class)->name('beranda');
Route::get('katalog', KatalogController::class)->name('katalog');
Route::get('tentangkami', TentangKamiController::class)->name('tentangkami');
Route::get('pesanan', [CartController::class, 'index'])->name('pesanan');




