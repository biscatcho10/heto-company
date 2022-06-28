<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = [
            'about',
            'projects',
            'products',
            'careers',
            'contact',
            'single',
        ];


        foreach ($banners as $banner) {
            $banner = Banner::firstOrCreate(['page_key' => $banner], ['upload_id' => null]);
        }
    }
}
