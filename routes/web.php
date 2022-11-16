<?php

use App\Http\Controllers\SoalController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soal', [SoalController::class, 'index'])->name('soal');
Route::get('/tambahsoal', [SoalController::class, 'tambahsoal'])->name('tambahsoal');
Route::post('/insertdata', [SoalController::class, 'insertdata'])->name('insertdata');
