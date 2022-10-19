<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('Task')->insert([
            'taskname'=>Str::random(10),
            'assignee'=>Str::random(10),
            'checklist'=>Str::random(10),
            'duedate'=>Carbon::parse('2000-01-01'),
            'priority'=>Str::random(10),
            'tags'=>Str::random(10),
            'description'=>Str::random(10),
        ]);
    }
}
