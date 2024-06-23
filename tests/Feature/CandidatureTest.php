<?php

namespace Tests\Feature;

use App\Models\Formation;
use App\Models\User;
use App\Models\Candidature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CandidatureTest extends TestCase
{
    use RefreshDatabase;

    public function testFilterByEtat()
    {
        // Création d'un utilisateur
        $user = User::factory()->create([
            'nom' => 'Ndiaye',
            'prenom' => 'Souleymane',
            'email' => 'souleymane@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'personnel',
            'telephone' => '776657777'
        ]);

        $user2 = User::factory()->create([
            'nom' => 'Fall',
            'prenom' => 'Amadou',
            'email' => 'amadou@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'personnel',
            'telephone' => '788222777'
        ]);

        // Création d'une formation
        $formation = Formation::factory()->create([
            'libelle' => 'Développeur web',
            'description' => 'Formation de développeur web',
            'date_debut' => '2021-01-01',
            'date_fin' => '2021-12-31',
            'nombre_place' => 10,
            'image' => 'test.jpg',
            'etat' => 'ouvert',
            'date_debut_appel' => '2021-01-01',
            'date_fin_appel' => '2021-12-31'
        ]);

        // Création de candidature avec l'état "accepter"
        $candidatureAccepter = Candidature::factory()->create([
            'biographie' => 'Biographie acceptée', // Ajout d'une biographie pour cette candidature
            'motivation' => 'Motivation acceptée', // Ajout d'une motivation pour cette candidature
            'cv' => 'test_accepte.pdf', // Fichier CV pour cette candidature
            'formation_id' => $formation->id,
            'user_id' => $user->id,
            'etat' => 'accepter' // État de la candidature est "accepter"
        ]);

        // Création de candidature avec l'état "en_attente"
        $candidatureEnAttente = Candidature::factory()->create([
            'biographie' => 'Biographie en attente', // Ajout d'une biographie pour cette candidature
            'motivation' => 'Motivation en attente', // Ajout d'une motivation pour cette candidature
            'cv' => 'test_attente.pdf', // Fichier CV pour cette candidature
            'formation_id' => $formation->id,
            'user_id' => $user2->id,
            'etat' => 'en_attente' // État de la candidature est "en_attente"
        ]);

        // Vérification du filtrage des candidatures "accepter"
        $response = $this->get(route('candidatures.filterByEtat', ['formation_id' => $formation->id, 'etat' => 'accepter']));
        
        // Vérifie que la réponse est un succès (code HTTP 200)
        $response->assertStatus(200); 
        
        // Vérifie que le texte "Candidats retenus" est présent dans la réponse
        $response->assertSee('Candidats retenus'); 
        
        // Vérifie que le nom de l'utilisateur de la candidature acceptée est présent dans la réponse
        $response->assertSee($candidatureAccepter->user->nom); 
        
        // Vérifie que le prénom de l'utilisateur de la candidature acceptée est présent dans la réponse
        $response->assertSee($candidatureAccepter->user->prenom); 
        
        // Vérifie que le nom de l'utilisateur de la candidature en attente n'est pas présent dans la réponse
        $response->assertDontSee($candidatureEnAttente->user->nom); 
        
        // Vérifie que le prénom de l'utilisateur de la candidature en attente n'est pas présent dans la réponse
        $response->assertDontSee($candidatureEnAttente->user->prenom); 




        // Vérification du filtrage des candidatures "en_attente"
        $response = $this->get(route('candidatures.filterByEtat', ['formation_id' => $formation->id, 'etat' => 'en_attente']));
        // Vérifie que la réponse est un succès (code HTTP 200)
        $response->assertStatus(200); 
        
        // Vérifie que le texte "Candidats en attente" est présent dans la réponse
        $response->assertSee('Candidats en attente'); 
        
        // Vérifie que le nom de l'utilisateur de la candidature en attente est présent dans la réponse
        $response->assertSee($candidatureEnAttente->user->nom); 
        
        // Vérifie que le prénom de l'utilisateur de la candidature en attente est présent dans la réponse
        $response->assertSee($candidatureEnAttente->user->prenom); 
        
        // Vérifie que le nom de l'utilisateur de la candidature acceptée n'est pas présent dans la réponse
        $response->assertDontSee($candidatureAccepter->user->nom); 
        
        // Vérifie que le prénom de l'utilisateur de la candidature acceptée n'est pas présent dans la réponse
        $response->assertDontSee($candidatureAccepter->user->prenom); 
        
    }
}
