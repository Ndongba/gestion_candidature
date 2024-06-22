<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatureController;
use App\Http\Controllers\NotificationController;

// Route de la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Routes pour l'authentification des utilisateurs
Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::middleware('guest')->group(function(){
        Route::get('register', 'register')->name('register');
        Route::post('register/save', 'registerSave')->name('register.save');
        Route::get('login', 'login')->name('login');
        Route::post('login/save', 'loginSave')->name('login.save');
    
            });
    Route::delete('logout', 'logout')->name('logout')->middleware('auth');

});

// Routes pour la gestion des formations
Route::controller(FormationController::class)->prefix('formations')->group(function () {
    Route::get('/', 'index')->name('formations.index');
    Route::get('detail/{id}', 'Detail')->name('formation.detail');

    
    Route::middleware('personnel')->group(function(){
        Route::get('afficher', 'afficherFormation')->name('formations.afficher');
        Route::get('modifier/{id}', 'modifierFormation')->name('formations.modifier');
        Route::post('modifierTraitement', 'modifierFormationTraitement')->name('formations.modifierTraitement');
        Route::get('ajout', 'ajoutformation')->middleware('personnel')->name('formations.ajouter');
        Route::post('store', 'store')->middleware('personnel')->name('formations.store');
        Route::delete('{id}', 'destroy')->name('formations.suppression');
    });
});





// Routes pour la gestion des candidatures pour candidat
Route::controller(CandidatureController::class)->middleware('auth')->prefix('candidatures')->group(function () {
    Route::get('post/{id}', 'ajouter_candidature')->name('candidature.ajouter');
    Route::post('/', 'traitement_candidature')->name('candidature.traitement');
    Route::get('afficher', 'afficher_candidature')->name('candidature.afficher');

});

// Routes pour l'administration (personnel uniquement)
Route::controller(AdminController::class)->prefix('admin')->middleware('personnel')->group(function () {

    Route::get('candidats', 'listeDesCandidats')->name('candidats.admin');

    Route::get('formation/{formation}/candidature/{candidature}', 'detailCandidat')->name('candidature.detail');

    Route::patch('formation/{formation}/candidature/{candidature}/update-status', 'updateStatus')->name('candidature.updateStatus');

    // Route pour afficher toutes les candidatures avec filtrage par état
    Route::get('/candidatures/{formation_id}', 'index')->name('candidats.liste.admin');

    // Route pour filtrer les candidatures par état
    Route::get('/candidatures/{formation_id}/{etat}', 'filterByEtat')->name('candidatures.filterByEtat');

    // recherche
    Route::get('/candidatures/search', 'search')->name('candidatures.search');


});


// Routes pour la gestion des notifications
Route::controller(NotificationController::class)->prefix('notifications')->middleware('auth')->group(function () {
    // Affiche les notifications de l'utilisateur
    Route::get('/', 'index')->name('notifications.dashboard');
    // Marque une notification comme lue
    Route::patch('mark-as-read/{id}', 'markAsRead')->name('notifications.markAsRead');
    // Marque toutes les notifications comme lues
    Route::get('mark-all-as-read', 'markAllAsRead')->name('notifications.markAllAsRead');

});


