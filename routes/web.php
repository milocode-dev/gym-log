<?php

use App\Http\Controllers\ExercisesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ExercisesController::class, 'index'])->name('index');
Route::get('/create_form', [ExercisesController::class, 'form'])->name('create.form');
Route::post('/exercise', [ExercisesController::class, 'store'])->name('exercise.store');