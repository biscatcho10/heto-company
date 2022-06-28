<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SEOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seos = [
            'home_seo_title' => 'Home Seo title',
            'home_seo_keywords' => 'Home Seo Keywords',
            'home_seo_description' => 'Home Seo Description',
            'about_seo_title' => 'About Seo title',
            'about_seo_keywords' => 'About Seo Keywords',
            'about_seo_description' => 'About Seo Description',
            'project_seo_title' => 'Projects Seo title',
            'project_seo_keywords' => 'Projects Seo Keywords',
            'project_seo_description' => 'Projects Seo Description',
            'single_seo_title' => 'Single Project Seo title',
            'single_seo_keywords' => 'Single Project Seo Keywords',
            'single_seo_description' => 'Single Project Seo Description',
            'product_seo_title' => 'Products Seo title',
            'product_seo_keywords' => 'Products Seo Keywords',
            'product_seo_description' => 'Products Seo Description',
            'career_seo_title' => 'Career Seo title',
            'career_seo_keywords' => 'Career Seo Keywords',
            'career_seo_description' => 'Career Seo Description',
            'contact_seo_title' => 'Contact us Seo title',
            'contact_seo_keywords' => 'Contact us Seo Keywords',
            'contact_seo_description' => 'Contact us Seo Description',
        ];

        foreach ($seos as $s => $x) {
            $seo = Seo::firstOrCreate(['type' => $s], ['value' => $s]);
        }
    }
}
