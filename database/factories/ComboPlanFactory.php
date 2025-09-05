<?php

namespace Database\Factories;

use App\Enums\ComboPlanStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ComboPlan>
 */
class ComboPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            "name" => $this->faker->unique()->words(3, true),
            
            "description" => $this->faker->sentence(),
            
            "price" => $this->faker->randomFloat(2, 0, 100),
            
            "status" => ComboPlanStatus::ACTIVE->value,
        ];
    }
}
