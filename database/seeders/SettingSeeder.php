<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            [
                'type' => 'logo',
                'value' => 'assets/svg/logo.svg',
            ],
            [
                'type' => 'favicon',
                'value' => 'assets/images/logo.png',
            ],
            [
                'type' => 'fb_link',
                'value' => 'https://web.facebook.com/',
            ],
            [
                'type' => 'in_link',
                'value' => 'https://www.instagram.com/',
            ],
            [
                'type' => 'wts_link',
                'value' => 'https://www.whatsapp.com/',
            ],
            [
                'type' => 'address',
                'value' => '123 Main St, New York, NY 10001'
            ],
            [
                'type' => 'fax',
                'value' => '123-456-7890',
            ],
            [
                'type' => 'cellular',
                'value' => '123-456-7890',
            ],
            [
                'type' => 'phone',
                'value' => '123-456-7890',
            ],
            [
                'type' => 'email',
                'value' => 'heto@gmail.com',
            ],
            [
                'type' => 'opening_time',
                'value' => '9:00 AM - 5:00 PM',
            ],
            [
                'type' => 'facebook_pixel',
                'value' => 'Facebook Pixel',
            ],
            [
                'type' => 'google_analysis',
                'value' => 'Google Analysis',
            ],

        ];


        foreach ($settings as $setting) {
            Setting::create($setting);
        }

    }
}
