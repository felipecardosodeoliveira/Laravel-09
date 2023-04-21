<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [HomeController::class, 'index']);
Route::get('/users/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/users/store', [HomeController::class, 'store'])->name('user.store');
Route::get('/users/{id}', [HomeController::class, 'show'])->name('user.show');
Route::get('/users/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::put('/users/edit/{id}', [HomeController::class, 'update'])->name('user.update');
Route::delete('/users/delete/{id}', [HomeController::class, 'destroy'])->name('user.delete');



