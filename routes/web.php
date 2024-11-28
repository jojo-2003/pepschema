<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PepController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PepController::class, 'index'])->name('users.index');
Route::get('/users/create', [PepController::class, 'create'])->name('users.create');
Route::post('/users/store', [PepController::class, 'store'])->name('users.store');
