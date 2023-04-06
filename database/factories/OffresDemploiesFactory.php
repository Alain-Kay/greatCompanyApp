<?php

namespace Database\Factories;

use App\Http\Controllers\OffresDemploies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OffresDemploiesFactory extends Factory
{
    
    /**
     * Define the model's default state.
     * 
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'companyName' => $this->faker->company(),
            'location' => $this->faker->name(),
            'content' => $this->faker->sentence()
        ];
    }
}
