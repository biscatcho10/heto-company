<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            [
                'title' => 'We Do Our Job Safely And Carefully',
                'subtitle' => 'It is a long established fact that a reader will be distracted',
                'image' => 'carousel-1.jpg',
            ],
            [
                'title' => 'Exhibition center in boston',
                'subtitle' => 'Concert Hall is the architecture of a new generation, a building',
                'image' => 'carousel-2.jpg',
            ],
            [
                'title' => 'Modern hotel in london',
                'subtitle' => 'Concert Hall is the architecture of a new generation, a building',
                'image' => 'carousel-3.jpg',
            ]
        ];


        foreach ($sliders as $slider) {
            $slider = Slider::create($slider);
        }
    }
}
