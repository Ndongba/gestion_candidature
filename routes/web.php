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


//Route pour afficher les formations pour les candidats
Route::get('formation', [FormationController::class, 'index'])->name('formations');

//Route qui permet d'ajouter une formation
Route::get ('/ajoutformation', [FormationController::class, 'ajoutformation'])->name('ajouter');
Route::post('/candidats/formations', [FormationController::class, 'store'])->name('formations.store');

//Cette route va nous peemettre de gerer la suppression d'une formation
Route::delete('formations/{id}', [FormationController::class, 'destroy'])->name('Suppression');

