<?php

namespace Database\Factories;

use App\Models\Codriver;
use Illuminate\Database\Eloquent\Factories\Factory;

class CodriverFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Codriver::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_codriver' => $this->faker->name(),
            'nik_codriver' => $this->faker->nik(),
            'umur_codriver' => mt_rand(20, 40),
            'telepon_codriver' => $this->faker->phoneNumber(),
            'alamat_codriver' => $this->faker->address(),
        ];
    }
}
