<?php
namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    protected $model = Formation::class;

    public function definition()
    {
        return [
            // Définition des attributs de la formation
            'libelle' => $this->faker->word,
            'description' => $this->faker->sentence,
            'date_debut' => now(),
            'date_fin' => now()->addMonths(6),
            'nombre_place' => $this->faker->numberBetween(1, 20),
            'image' => 'test.jpg',
            'etat' => 'ouvert',
            'date_debut_appel' => now(),
            'date_fin_appel' => now()->addMonths(3)
            
        ];
    }
}
