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
        DB::table('uploads')->insert([
            'user_id' => 1,
            'file_original_name' => 'test',
            'file_name' => 'test',
            'file_size' => 2,
            "extension" => "png",
            "type" => "JPG",
        ]);
    }
}
