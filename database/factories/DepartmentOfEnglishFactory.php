<?php

namespace Database\Factories;

use App\Models\DepartmentOfEnglish;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentOfEnglishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = DepartmentOfEnglish::class;

    public function definition()
    {
        return [

            'title' =>"Titulo",
            'image' => '',
            'body' => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Saepe, ullam doloremque? Dignissimos repellat corporis non vel animi.
            Ea reiciendis facilis eius dolor amet! Ab, accusantium modi.
            Quam earum doloribus perferendis!
            ",
            'fk_department_id' => 1,
        ];
    }
}
