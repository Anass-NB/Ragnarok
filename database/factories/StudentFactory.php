<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /*
            $table->string("full_name",255);
            $table->string("email",255);
            $table->string("grade",255);
            $table->double("note");
            $table->boolean("succeeded");
     */
    public function definition()
    {
        return [
            'full_name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'grade' =>fake()->word(),
            'note' => fake()->numberBetween($min = 0, $max = 20),
            'succeeded' => fake()->randomElement($array = array (0,1)) ,
        ];
    }
}
