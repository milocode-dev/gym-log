<?php

use App\Http\Controllers\ExercisesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/exercise', [ExercisesController::class, 'index'])->name('exercise.index');
Route::get('/exercise/create', [ExercisesController::class, 'form'])->name('exercise.form');
Route::post('/exercise', [ExercisesController::class, 'store'])->name('exercise.store');
Route::delete('/exercise/{id}', [ExercisesController::class, 'destroy'])->name('exercise.destroy');