<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

Route::get('/', function () {
    return view('welcome');
});





//Cette route va nous permettre de voir l'ensemble des formations
Route::get('/formations', [FormationController::class, 'index'])->name('formations');