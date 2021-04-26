<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Suppliers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->cellphone
        ];
    }
}
