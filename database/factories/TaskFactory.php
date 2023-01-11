<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'taskname' =>$this->faker->name,
            'assignee' =>$this->faker->name,
            'checklist' =>$this->faker->text,
            'duedate' =>$this->faker->date,
            'priority' =>$this->faker->name,
            'tags' =>$this->faker->name,
            'description' =>$this->faker->text,
           
        ];
    }
}
