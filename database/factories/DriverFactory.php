<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Driver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_driver' => $this->faker->name(),
            'nik_driver' => $this->faker->nik(),
            'umur_driver' => mt_rand(20, 40),
            'telepon_driver' => $this->faker->phoneNumber(),
            'alamat_driver' => $this->faker->address(),
        ];
    }
}
