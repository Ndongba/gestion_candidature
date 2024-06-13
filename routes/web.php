<?php

use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::controller(CandidatureController::class)->group(function () {

    Route::get('candidature', 'ajouter_candidature')->name('candidature');
    Route::post('candidature','traitement_candidature');
    
  
});
