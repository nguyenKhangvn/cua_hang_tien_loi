<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manufacturer>
 */
class ManufacturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'alias' => $this->faker->userName,
            'trademark registrant' => 'Huỳnh Minh Khuê', 
            'trademarking number' => '25122002', 
            'headquarter area' => $this->faker->address, 
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'logo' => $this->faker->imageUrl(100,100,'cat'),
            'desc' => $this->faker->text,
            'zipcode' => $this->faker->postcode,
        ];
    }
}
