<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->email,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'iamage' => $this->faker->imageUrl,
            'position' => $this->faker->jobTitle(),
            'sallery' => $this->faker->randomDigit,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'age' => $this->faker->randomDigit,
            'joined_at' =>$this->faker->date()
];
    }
}
