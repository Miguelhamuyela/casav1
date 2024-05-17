<?php

namespace Database\Factories;

use App\Models\History;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = History::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Saepe, ullam doloremque? Dignissimos repellat corporis non vel animi.
            Ea reiciendis facilis eius dolor amet! Ab, accusantium modi.
            Quam earum doloribus perferendis!
            ",
            'Dean_body' => 'Descrição sobre o Reitor',
            'title' =>"Titulo",
            'image' => ''
        ];
    }



}
