<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Helpdesk>
 */
class HelpdeskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' =>$this->faker->name,
            'subjectline' =>$this->faker->text,
            'description' =>$this->faker->text,
            
            'priority' =>Str::random(12),

        ];
    }
}
