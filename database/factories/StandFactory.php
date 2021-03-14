<?php

namespace Database\Factories;
use App\Models\Stand;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class StandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre"=> $this->faker->unique()->company
        ];
    }
}
