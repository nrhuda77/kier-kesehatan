<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelamar>
 */
class PelamarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'umur' => $this->faker->numberBetween(25,40),
            'jenis_kelamin' => $this->faker->randomElement(['laki-laki', 'perempuan']) ,
            'alamat' => $this->faker->address(),
            'tekanan_darah' => $this->faker->numberBetween(50,120),
            'per_tekanan_darah' => $this->faker->numberBetween(90,200),
            'berat_badan' => $this->faker->numberBetween(45,80),
            'tinggi_badan' => $this->faker->numberBetween(155,180),
            'suhu_tubuh'=> $this->faker->numberBetween(35,37),
            'buta_warna' => $this->faker->randomElement(['iya', 'tidak'])
        ];
    }
}
