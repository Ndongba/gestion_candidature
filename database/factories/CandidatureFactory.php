<?php
// CandidatureFactory
namespace Database\Factories;


use App\Models\Candidature;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CandidatureFactory extends Factory
{
    protected $model = Candidature::class;
    public function definition()
    {
        return [
            // Définition des attributs de la formation
            'biographie' => $this->faker->word,
           'motivation' => $this->faker->sentence,
            'formation_id' => $this->faker->numberBetween(1, 1),
            'cv' => $this->faker->word,
            'etat' => 'en_evaluation',
            'user_id' => $this->faker->numberBetween(1, 1),

           
        ];
    }
}