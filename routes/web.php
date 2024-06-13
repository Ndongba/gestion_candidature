<?php

use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\FormationController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('detail',[FormationController::class ,'Detail']);


Route::controller(FormationController::class)->group(function () {
    Route::get('/afficherFormation', 'afficherFormation')->name('afficherFormation');

    Route::get('/modifierFormation/{id}', 'modifierFormation')->name('modifierFormation');
    Route::post('modifierFormationTraitement','modifierFormationTraitement')->name('modifierFormationTraitement');

});


Route::controller(AuthController::class)->group(function () {

    Route::get('/register', 'register')->name('register');
    Route::post('/register/save', 'registerSave')->name('register.save');

    Route::get('/login', 'login')->name('login');
    Route::post('/login/save', 'loginSave')->name('login.save');

    Route::delete('/logout', 'logout')->name('logout');
});




Route::controller(CandidatureController::class)->group(function () {

    Route::get('candidature', 'ajouter_candidature')->name('candidature');
    Route::post('candidature','traitement_candidature');
    Route::get('affiche_candidature','afficher_candidature');
    
});
// Routes pour l'administration
Route::controller(AdminController::class)->middleware('personnel')->prefix('admin')->group(function () {
    // Affiche le tableau de bord de l'admin
    Route::get('candidats/', 'listeCandidats')->name('candidats.admin');
    Route::get('candidats/{id}', 'listeCandidats')->name('candidats.liste.admin');
    Route::get('/formation/{formation}/candidature/{candidature}',  'detailCandidat')->name('candidature.detail');
    // Valide une commande
   
});