<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;
use App\Models\Employer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->title(),
            'salary'=> fake()->randomElement(['$50,000','$60,000','$70,000','$80,000']),
            'location' => 'remote',
            'schedule' => 'Full Time',
            'url' => fake()->url(),
            'featured' => fake()->boolean(),
        ];
    }
}
