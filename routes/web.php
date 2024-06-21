<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatureController;

// Route de la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Routes pour l'authentification des utilisateurs
Route::prefix('auth')->controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register/save', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login/save', 'loginSave')->name('login.save');
    Route::delete('logout', 'logout')->name('logout');
});

// Routes pour la gestion des formations
Route::prefix('formations')->controller(FormationController::class)->group(function () {
    Route::get('/', 'index')->name('formations.index');
    Route::get('afficher', 'afficherFormation')->name('formations.afficher');
    Route::get('modifier/{id}', 'modifierFormation')->name('formations.modifier');
    Route::post('modifierTraitement', 'modifierFormationTraitement')->name('formations.modifierTraitement');
    Route::get('ajout', 'ajoutformation')->middleware('personnel')->name('formations.ajouter');
    Route::post('store', 'store')->middleware('personnel')->name('formations.store');
    Route::delete('{id}', 'destroy')->name('formations.suppression');
    Route::get('detail/{id}', 'Detail')->name('formation.detail');
});

// Routes pour la gestion des candidatures
Route::prefix('candidatures')->controller(CandidatureController::class)->group(function () {
    Route::get('post/{id}', 'ajouter_candidature')->name('candidature.ajouter');
    Route::post('/', 'traitement_candidature')->name('candidature.traitement');
    Route::get('afficher', 'afficher_candidature')->name('candidature.afficher');
});

// Routes pour l'administration (personnel uniquement)
Route::prefix('admin')->middleware('personnel')->controller(AdminController::class)->group(function () {
    Route::get('candidats', 'listeDesCandidats')->name('candidats.admin');
    Route::get('candidats/{id}', 'listeCandidats')->name('candidats.liste.admin');
    Route::get('formation/{formation}/candidature/{candidature}', 'detailCandidat')->name('candidature.detail');
    Route::patch('formation/{formation}/candidature/{candidature}/update-status', 'updateStatus')->name('candidature.updateStatus');
});
