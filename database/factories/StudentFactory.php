<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name'=> fake()->randomElement(['BottleSilkTouch Bed','Tree Pot','LinensVitaBoost Smoothie','MixChicStyle Handbag','FertilizerUrbanPulse','SetAquaPure Water','EcoLeaf Tree PotSunburst Citrus']),
        'class'=> fake()->string(),
        'address'=> fake()->string(),
            //
        ];
    }
}
