<?php

namespace Database\Factories;

use App\Enums\UserRoleEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'email' => $this->faker->email,
            'password' => $this->faker->password,
            'phone' => $this->faker->phoneNumber,
            'gender' => $this->faker->boolean,
            'address' => $this->faker->address,
            'avatar' => $this->faker->imageUrl(),
            'birthdate' => $this->faker->dateTimeBetween('-60 years', '-18 years'),
            'role' => $this->faker->randomElement(UserRoleEnum::getValues()),
        ];
    }
}
