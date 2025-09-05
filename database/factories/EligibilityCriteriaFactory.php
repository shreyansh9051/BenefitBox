<?php

namespace Database\Factories;

use App\Enums\EligibilityCriteriaStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EligibilityCriteria>
 */
class EligibilityCriteriaFactory extends Factory
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
            
            "age_less_than" => $this->faker->numberBetween(0, 100),
            
            "age_greater_than" => $this->faker->numberBetween(0, 100),
            
            "last_login_days_ago" => $this->faker->numberBetween(0, 365),
            
            "income_less_than" => $this->faker->numberBetween(0, 999),
            
            "income_greater_than" => $this->faker->numberBetween(0, 999),
            
            "status" => EligibilityCriteriaStatus::ACTIVE->value,
        ];
    }
}
