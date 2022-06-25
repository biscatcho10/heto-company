<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UploadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 5) as $index) {
            DB::table('uploads')->insert([
                'user_id' => 1,
                'file_original_name' => $index,
                'file_name' => $index . '.jpg',
                'file_size' => 0,
                "extension" => "jpg",
                "type" => "image/jpeg",
            ]);
        }
    }
}
