<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stagiaire>
 */
class StagiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => $this->faker->creditCardNumber(),
            'civilite' => $this->faker->randomElement(['femme', 'homme']),
            'statut' => $this->faker->randomElement(['SENSIBILAISE', 'FORME', 'VISITER INCUBATEUR', 'PROTRUR PROJET']),
            'cin' => $this->faker->swiftBicNumber(),
            'nom' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            'filere' => "development",
            'groupe' => "full stack",
            'date_naissance' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tel' => $this->faker->phoneNumber,
            'email' => $this->faker->email(),
            'type_stag' => 'Interne',
            'niveau' => $this->faker->randomElement(['NIVEAU TECHNICIEN SPECIALISE', 'NIVEAU TECHNICIEN', 'NIVEAU QUALIFICATION']),
            'commentaire' => $this->faker->text($maxNbChars = 200),

        ];
    }
}
