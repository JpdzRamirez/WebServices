<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Controller;
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


Route::get('/', [MainController::class, 'index'] )->name ('landing.index');

Route::get('home/about', [MainController::class, 'about'])->name ('landing.about');

Route::get('home/store', [MainController::class, 'store'] )->name ('landing.store');

Route::get('home/menu', [MainController::class, 'menu'] )->name('landing.menu');

