<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\aspirasi>
 */
class aspirasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nim' => $this->faker->name(),
            'prodi' => $this->faker->sentence(mt_rand(1,2)),
            'isu' => $this->faker->sentence(mt_rand(5,7)),
            'harapan' => $this->faker->sentence(mt_rand(10,15)),
            'kel_aspirasi' => $this->faker->name(),
        ];
    }
}
