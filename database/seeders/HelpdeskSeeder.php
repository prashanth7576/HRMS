<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HelpdeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Helpdesk')->insert([
            'category'=>Str::random(10),
            'subjectline'=>Str::random(10),
            'description'=>Str::random(30),
            'priority'=>Str::random(10),

        ]);
    }
}
