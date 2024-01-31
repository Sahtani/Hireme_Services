<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\categoryModel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceModel>
 */
class ServiceModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
            return [
                'title' =>fake()->name(6),
                'desc' => $this->faker->sentence,
                'cost' => $this->faker->randomFloat(2, 10, 100),
                'email' => $this->faker->unique()->safeEmail,
                'tel' => $this->faker->phoneNumber,
                'cat_id' => function () {
                    return \App\Models\categoryModel::factory()->create()->id;
                },
                'created_at' => now(),
                'updated_at' => now(),
            ];
        
    }
}
