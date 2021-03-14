<?php

namespace Database\Factories;

use App\Models\Stand;
use App\Models\User;
use App\Models\Visit;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Visit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'stand_id' => Stand::all()->random()->id,
            'user_id' => User::all()->random()->id,
            "visit_time"=>Carbon::parse(now())->format('Y-m-d\TH:i')
        ];

    }
}
