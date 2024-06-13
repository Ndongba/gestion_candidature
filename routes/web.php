<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('detail',[FormationController::class ,'Detail']);