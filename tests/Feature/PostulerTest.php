<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Formation;
use App\Models\Candidature;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostulerTest extends TestCase
{
    use RefreshDatabase;

    public function test_candidature_soumise_avec_succes()
    {
        // Création d'un utilisateur et connexion
        $user = User::factory()->create([
            'nom' => 'Ndiaye',
            'prenom' => 'Souleymane',
            'email' => 'souleymane.candidat@gmail.com',
            'role' => 'candidat',
            'telephone' => '776657778',
            'password' => bcrypt('password123'),
        ]);

        // $this->actingAs($user);
        Auth::login($user);

        // Création d'une formation
        $formation = Formation::factory()->create([
            'libelle' => 'Développeur web',
            'description' => 'Formation de développeur web',
            'date_debut' => '2024-01-01',
            'date_fin' => '2024-12-31',
            'nombre_place' => 10,
            'image' => 'test.jpg',
            'etat' => 'ouvert',
            'date_debut_appel' => '2024-01-01',
            'date_fin_appel' => '2024-12-31'
        ]);

        $formation2 = Formation::factory()->create([
            'libelle' => 'Développeur mobile',
            'description' => 'Formation de développeur mobile',
            'date_debut' => '2024-01-01',
            'date_fin' => '2024-12-31',
            'nombre_place' => 10,
            'image' => 'test.jpg',
            'etat' => 'ouvert',
            'date_debut_appel' => '2024-01-01',
            'date_fin_appel' => '2024-12-31'
        ]);

        // Simulation du fichier CV
        Storage::fake('public');
        $cv = UploadedFile::fake()->create('cv.pdf', 500, 'application/pdf');

        // Soumission de la candidature
        $response = $this->post(route('candidature.traitement'), [
            'formation_id' => $formation->id,
            'biographie' => 'Biographie test',
            'motivation' => 'Motivation test',
            'cv' => $cv,
        ]);

        $response = $this->post(route('candidature.traitement'), [
            'formation_id' => $formation2->id,
            'biographie' => 'Biographie test',
            'motivation' => 'Motivation test',
            'cv' => $cv,
        ]);

        // Vérifications
        $response->assertRedirect(route('candidature.afficher'));

  
    }

    public function test_candidature_deja_existante()
    {
        // Création d'un utilisateur et connexion
        $user = User::factory()->create([
            'nom' => 'Ndiaye',
            'prenom' => 'Souleymane',
            'email' => 'souleymane.candidat@gmail.com',
            'role' => 'candidat',
            'telephone' => '776657778',
            'password' => bcrypt('password123'),
        ]);

        // $this->actingAs($user);
        Auth::login($user);

        // Création d'une formation
        $formation = Formation::factory()->create([
            'libelle' => 'Développeur web',
            'description' => 'Formation de développeur web',
            'date_debut' => '2024-01-01',
            'date_fin' => '2024-12-31',
            'nombre_place' => 10,
            'image' => 'test.jpg',
            'etat' => 'ouvert',
            'date_debut_appel' => '2024-01-01',
            'date_fin_appel' => '2024-12-31'
        ]);

        // Création d'une candidature existante
        Candidature::factory()->create([
            'formation_id' => $formation->id,
            'user_id' => $user->id,
            'biographie' => 'Biographie existante',
            'motivation' => 'Motivation existante',
            'cv' => 'cv_existante.pdf',
            'etat' => 'en_evaluation',
        ]);

        // Soumission d'une nouvelle candidature pour la même formation
        $response = $this->post(route('candidature.traitement'), [
            'formation_id' => $formation->id,
            'biographie' => 'Nouvelle biographie',
            'motivation' => 'Nouvelle motivation',
            'cv' => UploadedFile::fake()->create('cv.pdf', 500, 'application/pdf'),
        ]);

        // Vérifications
        $response->assertRedirect();
        $response->assertSessionHas('error', 'Vous avez déjà postulé à cette formation.');

        $this->assertDatabaseCount('candidatures', 1);
        
    }

    public function test_validation_des_champs()
    {
        // Création d'un utilisateur et connexion
        $user = User::factory()->create([
            'nom' => 'Ndiaye',
            'prenom' => 'Souleymane',
            'email' => 'souleymane.candidat@gmail.com',
            'role' => 'candidat',
            'telephone' => '776657778',
            'password' => bcrypt('password123'),
        ]);

        $this->actingAs($user);

        // Soumission avec des données manquantes
        $response = $this->post(route('candidature.traitement'), [
            'formation_id' => '',
            'biographie' => '',
            'motivation' => '',
            'cv' => '',
        ]);

        // Vérifications des erreurs de validation
        $response->assertSessionHasErrors(['formation_id', 'biographie', 'motivation', 'cv']);
    }
}
