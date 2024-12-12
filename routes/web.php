<?php

use App\Http\Controllers\Auth\BlogController;
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


Auth::routes();

Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('lithotherapie', [BlogController::class, 'lithotherapie'])->name('lithotherapie');
Route::get('leveil', [BlogController::class, 'leveil'])->name('leveil');
Route::get('outils', [BlogController::class, 'outils'])->name('outils');
Route::get('propos', [BlogController::class, 'propos'])->name('propos');
Route::get('signes', [BlogController::class, 'signes'])->name('signes');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
