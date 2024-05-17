<?php

namespace Database\Factories;

use App\Models\GraduationStatistic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GraduationStatisticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GraduationStatistic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'totalGraduated' =>"2500"
        ];
    }



}
