<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'HITATCHI Global SideSmart General catalogue',
                'desc' => 'Variable Refrigerant Flow system Slim Modular outdoor units Air source heat pump type',
                'image' => 'Products-1.jpg',
                'file' => 'book2.pdf',
                'model' => 'SideSmart',
                'seo_title' => 'Product 1 SEO title',
                'seo_description' => 'Product 1 SEO description',
                'seo_keywords' => 'Product 1 SEO keywords',
            ],
            [
                'name' => 'VARIABLE REFRIGERANT FLOW',
                'desc' => 'AIR SOURCE HEAT PUMP STANDARD AND HIGH EFFICIENCY (50 Hz)',
                'image' => 'Products-2.jpg',
                'file' => 'book2.pdf',
                'model' => 'FSNSE1 / FSNPE1 SERIES',
                'seo_title' => 'Product 2 SEO title',
                'seo_description' => 'Product 2 SEO description',
                'seo_keywords' => 'Product 2 SEO keywords',
            ],
            [
                'name' => 'SET FREE mini',
                'desc' => 'VARIABLE REFRIGERANT FLOW AIR SOURCE HEAT PUMP TYPE',
                'image' => 'Products-3.jpg',
                'file' => 'book2.pdf',
                'model' => 'HNRQ SERIES',
                'seo_title' => 'Product 3 SEO title',
                'seo_description' => 'Product 3 SEO description',
                'seo_keywords' => 'Product 3 SEO keywords',
            ],
            [
                'name' => 'SET FREE mini',
                'desc' => 'VARIABLE REFRIGERANT FLOW AIR SOURCE HEAT PUMP TYPE',
                'image' => 'Products-4.jpg',
                'file' => 'book2.pdf',
                'model' => 'HNRQ SERIES',
                'seo_title' => 'Product 4 SEO title',
                'seo_description' => 'Product 4 SEO description',
                'seo_keywords' => 'Product 4 SEO keywords',
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
