<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Onboard>
 */
class OnboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' =>$this->faker->firstname,
            'lastname' =>$this->faker->lastname,
            'jobtitle' =>$this->faker->jobtitle,
            'employeeid' =>$this->faker->randomElement(['XSS0419', 'XSS0420', 'XSS0418',    'XSS0415', 'XSS0407',  'XSS0408', 'XSS0416']),
            'mobile' =>$this->faker->randomNumber(['9940586122', '9960586122']),
            'email' => fake()->unique()->safeEmail(),
            'gender' =>$this->faker->randomElement(['male', 'female']),
            'address' =>$this->faker->randomElement(['Hyd', 'Mumbai', 'Kerala', 'Goa']),
            'dateofbirth' =>$this->faker->date,
            'joiningdate' =>$this->faker->date,
            'confirmationdate' =>$this->faker->date,
            'probationperiod' =>$this->faker->randomElement(['6months', '3months', '1year']),
            'noticeperiod' =>$this->faker->randomElement(['1month', '15days']),
            'designation' =>$this->faker->randomElement(['Senior Developer', 'Intern', 'Project Manager', 'Team Lead']),
            'department' =>$this->faker->randomElement(['IT', 'Marketing', 'Design', 'Testing']),
            'officelocation' =>$this->faker->randomElement(['Hyd', 'Mumbai', 'Kerala', 'Goa']),
            'shifttype'=>  $this->faker->randomElement(['General Shift', 'Night Shift', 'US Shift']),
            'reportingmanager' =>$this->faker->name,
            'profilepicture' =>$this->faker->url(20),


        ];
    }
}
