<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table("jobs")->insert([
            [
                'title' => 'IT',
                'description' => $faker->address(),
            ],
            [
                'title' => 'HR',
                'description' => $faker->address(),
            ],
            [
                'title' => 'Manger',
                'description' => $faker->address(),
            ],
        ]);
    }
}
