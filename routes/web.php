<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\FormationController;
use App\Http\Controllers\CandidatureController;

Route::get('/', function () {
    //return view('welcome');
    
        $data = [
            'title' => 'Hi student I hope you like the course',
            'content' => 'This laravel course was created with a lot of love and dedication for you'
        ];
    
        Mail::send('mail.welcome-email', $data, function($message){
            $message->to('souleymane9700@gmail.com', 'jul jj')->subject('Hello student how are you?');
        });
    });

Route::get('detail/{id}',[FormationController::class ,'Detail']);


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

    Route::get('candidature/post/{id}', 'ajouter_candidature')->name('candidature');
    Route::post('candidature','traitement_candidature');
    Route::get('affiche_candidature','afficher_candidature')->name('afficher_candidature');
    
});
// Routes pour l'administration
Route::controller(AdminController::class)->prefix('admin')->group(function () {
    // Affiche le tableau de bord de l'admin
    Route::get('candidats/', 'listeCandidats')->name('candidats.admin');
    Route::get('candidats/{id}', 'listeCandidats')->name('candidats.liste.admin');
    Route::get('/formation/{formation}/candidature/{candidature}',  'detailCandidat')->name('candidature.detail');
//   validation
    Route::patch('/formation/{formation}/candidature/{candidature}/update-status', 'updateStatus')
    ->name('candidature.updateStatus');   
});


//Route pour afficher les formations pour les candidats
Route::get('formation', [FormationController::class, 'index'])->name('formations');

//Route qui permet d'ajouter une formation
Route::get ('/ajoutformation', [FormationController::class, 'ajoutformation'])->name('ajouter');
Route::post('/candidats/formations', [FormationController::class, 'store'])->name('formations.store');

//Cette route va nous peemettre de gerer la suppression d'une formation
Route::delete('formations/{id}', [FormationController::class, 'destroy'])->name('Suppression');

    // Valide
    