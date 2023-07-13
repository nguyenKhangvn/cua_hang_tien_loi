<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LocationStore>
 */
class LocationStoreFactory extends Factory
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
            'address' => $this->faker->address,
            'address2' => $this->faker->streetAddress,
            'town' => $this->faker->country,
            'district' => $this->faker->buildingNumber,
            'city' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'logo' => $this->faker->boolean ? $this->faker->imageUrl() : null,
        ];
    }
}
