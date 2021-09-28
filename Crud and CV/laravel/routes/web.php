<?php

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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;


Route::get('/', HomeController::class);
Route::get('users', [MainController::class, 'index'])->name('crud.index');
Route::get('users/formulario', [MainController::class, 'create'])->name('crud.create');
Route::post('users', [MainController::class, 'store'])->name('crud.store');
Route::get('users/{user}/show', [MainController::class, 'show'])->name('crud.show');       
Route::get('users/{user}/edit', [MainController::class, 'edit'])->name('crud.edit');       
Route::put('users/{user}', [MainController::class, 'update'])->name('crud.update');
Route::delete('users/{user}/delete', [MainController::class, 'delete'])->name('crud.delete');
