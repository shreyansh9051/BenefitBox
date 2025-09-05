<?php

namespace Database\Factories;

use App\Enums\PlanStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
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
            
            "status" => PlanStatus::ACTIVE->value,
        ];
    }
}
