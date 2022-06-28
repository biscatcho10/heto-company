<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([
            [
                'title' => 'Hotel',
                'created_at' => now(),
            ],
            [
                'title' => 'Restaurant',
                'created_at' => now(),
            ],
            [
                'title' => 'Hospital',
                'created_at' => now(),
            ],
            [
                'title' => 'Mall',
                'created_at' => now(),
            ],
        ]);
    }
}
