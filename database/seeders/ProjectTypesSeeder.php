<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table("project_types")->insert([
            [
                'title' => 'Commercial',
                'description' => $faker->address(),
                'gallery' => "[1,2]",
            ],
            [
                'title' => 'Residential',
                'description' => $faker->address(),
                'gallery' => "[2,1]",
            ],
            [
                'title' => 'Industrial',
                'description' => $faker->address(),
                'gallery' => "[3,1]",
            ],
        ]);
    }
}
