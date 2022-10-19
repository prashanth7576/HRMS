<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class OnboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Onboard')->insert([
            'employeeid'=>Str::random(10),
            'name'=>Str::random(10),
            'dateofbirth'=>Carbon::parse('2000-01-01'),
            'gender'=>Str::random(10),
            'reportingmanager'=>Str::random(10),
            'status'=>Str::random(10),
            'dateofjoining'=>Carbon::parse('2000-01-01'),
            'probationperiod'=>Str::random(10),
            'confirmationdate'=>Carbon::parse('2000-01-01'),
            'email'=>Str::random(20).'@gmail.com',
            'mobilenumber'=>Str::random(10),
            'emergencycontactnumber'=>Str::random(10),
            'designation'=>Str::random(10),
            'department'=>Str::random(10),
            'location'=>Str::random(10),
            'attendancescheme'=>Str::random(10),
            'pannumber'=>Str::random(10),
            'uannumber'=>Str::random(10),
            'aadhaarnumber'=>Str::random(10),
            'bankaccountnumber'=>Str::random(10),
            'ifsccode'=>Str::random(10),
            'branchcode'=>Str::random(10),

        ]);
    }
}
