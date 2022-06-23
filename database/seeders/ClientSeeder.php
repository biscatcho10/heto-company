<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            [
                'name' => 'Client 1',
                'image' => 'clients-1.png',
                'url' => '#',
                'seo_title' => 'Client 1',
                'seo_description' => 'Client 1',
                'seo_keywords' => 'Client 1',
            ],
            [
                'name' => 'Client 2',
                'image' => 'clients-2.png',
                'url' => '#',
                'seo_title' => 'Client 2',
                'seo_description' => 'Client 2',
                'seo_keywords' => 'Client 2',
            ],
            [
                'name' => 'Client 3',
                'image' => 'clients-3.png',
                'url' => '#',
                'seo_title' => 'Client 3',
                'seo_description' => 'Client 3',
                'seo_keywords' => 'Client 3',
            ],
            [
                'name' => 'Client 4',
                'image' => 'clients-4.png',
                'url' => '#',
                'seo_title' => 'Client 4',
                'seo_description' => 'Client 4',
                'seo_keywords' => 'Client 4',
            ],
            [
                'name' => 'Client 5',
                'image' => 'clients-5.png',
                'url' => '#',
                'seo_title' => 'Client 5',
                'seo_description' => 'Client 5',
                'seo_keywords' => 'Client 5',
            ],
            [
                'name' => 'Client 6',
                'image' => 'clients-6.png',
                'url' => '#',
                'seo_title' => 'Client 6',
                'seo_description' => 'Client 6',
                'seo_keywords' => 'Client 6',
            ],

        ];

        foreach ($clients as $client) {
            Client::create($client);
        }
    }
}
