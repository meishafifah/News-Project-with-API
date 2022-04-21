<?php

use App\Http\Controllers\BeritaController;
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

Route::get('/berita', [BeritaController::class, 'index']);
Route::post('/berita', [BeritaController::class, 'store']);
Route::get('/form/berita', [BeritaController::class, 'callForm']);
Route::get('/berita/{id}', [BeritaController::class, 'show']);