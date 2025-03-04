<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\testcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// par convention  on  fait des routes avec des controllers tu peut utiliser des fontions anonymes pour faire des tests ou automatisé le deploiement
Route::resource('test', testcontroller::class);
Route::get('/students/create', [StudentController::class, 'create']);
Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::post('/students', [StudentController::class, 'store'])->name("students.store");
