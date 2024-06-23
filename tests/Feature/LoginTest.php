<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    // Test de la connexion pour un utilisateur avec le rôle 'personnel'
    public function testLoginAsAdmin()
    {
        // Création d'un mot de passe en clair
        $password = 'password123';
        
        // Création d'un utilisateur avec des informations spécifiques, y compris un mot de passe chiffré
        $user = User::factory()->create([
            'nom' => 'Ndiaye',
            'prenom' => 'Souleymane',
            'email' => 'souleymane@gmail.com',
            'role' => 'personnel',
            'telephone' => '776657777',
            'password' => Hash::make($password),
        ]);

        // Envoi d'une requête POST pour se connecter avec les informations correctes
        $response = $this->post(route('login.save'), [
            'email' => $user->email,
            'password' => $password,
        ]);

        // Vérification que l'utilisateur est redirigé vers la page des candidats admin après la connexion
        $response->assertRedirect('admin/candidats');
        // Vérification que le message de succès est bien en session
        $response->assertSessionHas('success', 'Connexion réussie en tant qu\'admin');

        // Vérification que l'utilisateur est bien authentifié
        $this->assertAuthenticatedAs($user);
    }

    // Test de la connexion pour un utilisateur avec le rôle 'candidat'
    public function testLoginAsCandidat()
    {
        // Création d'un mot de passe en clair
        $password = 'password123';
        
        // Création d'un utilisateur avec des informations spécifiques, y compris un mot de passe chiffré
        $user = User::factory()->create([
            'nom' => 'Ndiaye',
            'prenom' => 'Souleymane',
            'email' => 'souleymane.candidat@gmail.com',
            'role' => 'candidat',
            'telephone' => '776657778',
            'password' => Hash::make($password),
        ]);

        // Envoi d'une requête POST pour se connecter avec les informations correctes
        $response = $this->post(route('login.save'), [
            'email' => $user->email,
            'password' => $password,
        ]);

        // Vérification que l'utilisateur est redirigé vers la page des formations après la connexion
        $response->assertRedirect('/formations');
        // Vérification que le message de succès est bien en session
        $response->assertSessionHas('success', 'Connexion réussie en tant que candidat');

        // Vérification que l'utilisateur est bien authentifié
        $this->assertAuthenticatedAs($user);
    }

    // Test de la connexion avec des identifiants incorrects
    public function testLoginWithInvalidCredentials()
    {
        // Création d'un mot de passe en clair
        $password = 'password123';
        
        // Création d'un utilisateur avec un mot de passe chiffré
        $user = User::factory()->create([
            'email' => 'souleymane@gmail.com',
            'password' => Hash::make($password),
        ]);

        // Envoi d'une requête POST pour se connecter avec un mot de passe incorrect
        $response = $this->post(route('login.save'), [
            'email' => $user->email,
            'password' => 'incorrectpassword',
        ]);

        // Vérification que l'utilisateur est redirigé après une tentative de connexion infructueuse
        $response->assertRedirect();
        // Vérification que le message d'erreur est bien en session
        $response->assertSessionHas('error', 'Identifiants incorrects');

        // Vérification que l'utilisateur n'est pas authentifié
        $this->assertGuest();
    }
}
