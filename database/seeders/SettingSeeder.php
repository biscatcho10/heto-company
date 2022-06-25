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
            [
                'type' => 'hp_about_title',
                'value' => 'Heliopolis Engineering and Trading company HETO',
            ],
            [
                'type' => 'hp_about_description',
                'value' => "Heliopolis Engineering and Trading company HETO is one of Egypt's leading MEP contractors, importers and distributors. HETO was founded by Eng Essam Morcos in 1980. The company offers a comprehensive package of Electro- mechanical services including complete Electrical, HVAC, Plumbing and Firefighting supply and installation as HETO is classified as class 3 in electromechanical in Egyptian Federation for construction and Building Contractors. At HETO we have a team of highly experienced engineers and highly and highly skilled technicians.",
            ],
            [
                'type' => 'hp_about_image',
                'value' => 'about.jpg',
            ],
            [
                'type' => 'hp_career_title',
                'value' => 'PROVIDING PERSONALIZED AND HIGH QUALITY SERVICES',
            ],
            [
                'type' => 'hp_career_description',
                'value' => "WE CAN MANAGE YOUR DREAM BUILDING A SMALL RIVER NAMED DUDEN FLOWS BY THEIR PLACE",
            ],
            [
                'type' => 'hp_career_image',
                'value' => 'break.jpg',
            ],
            [
                'type' => 'who_we_are_title',
                'value' => 'who we are',
            ],
            [
                'type' => 'who_we_are_desc',
                'value' => "<p>Heliopolis Engineering and Trading company HETO</p>
                <p>
                    Heliopolis Engineering and Trading company HETO is one of
                    Egypt's leading MEP contractors, importers and distributors.
                    HETO was founded by Eng Essam Morcos in 1980.
                </p>
                <p>
                    The company offers a comprehensive package of Electro-
                    mechanical services including complete Electrical, HVAC,
                    Plumbing and Firefighting supply and installation as HETO is
                    classified as class 3 in electromechanical in Egyptian
                    Federation for construction and Building Contractors. At
                    HETO we have a team of highly experienced engineers and
                    highly and highly skilled technicians.
                </p>",
            ],
            [
                'type' => 'what_we_do_title',
                'value' => 'what we do',
            ],
            [
                'type' => 'what_we_do_desc',
                'value' => "
                    In addition to the Contracting works, HETO is the supplier
                    and importer for leading companies in the air conditioning
                    field and for the copper pipes and fittings. HETO is the
                    supplier and importer in Egypt for (Johnson Controls HITACHI
                    Air Conditioning <br>- TECNAIR Close Control Air Conditioners <br>-
                    CHIGO Air Conditioning <br>- Mueller Copper pipes and fittings)
                ",
            ],
            [
                'type' => 'contracting_department_title',
                'value' => 'Contracting Department',
            ],
            [
                'type' => 'contracting_department_desc',
                'value' => "The Contracting department at HETO is focusing on the electromechanical works (HVAC, plumbing, electrical, firefighting, fire alarm) for different types of projects. At HETO, we do MEP projects for Residential Projects (apartments, villas, high rise apartments); Commercial Projects (admin buildings, hospitals, hotels, shopping centres, schools, universities) and Industrial Projects (Power Station, Tunnels, factories, warehouses)",
            ],
            [
                'type' => 'services_department_title',
                'value' => 'The Services Department',
            ],
            [
                'type' => 'services_department_desc',
                'value' => "HETO provides services as Planning, Coordination, Engineering, Supervision, Testing & Commissioning, Operation and Maintenance for all its MEP works and HVAC plants"
            ],
            [
                'type' => 'ceo_name',
                'value' => 'Essam Morcos',
            ],
            [
                'type' => 'ceo_signature',
                'value' => 'Essam Morcos',
            ],
            [
                'type' => 'ceo_image',
                'value' => 'founded.jpg',
            ],
            [
                'type' => 'ceo_sec_title',
                'value' => 'HETO was founded by Essam Morcos in 1980',
            ],
            [
                'type' => 'ceo_sec_description',
                'value' => "Heliopolis Engineering and Trading company HETO is one of Egypt's
                        leading MEP contractors, importers and distributors. HETO was
                        founded by Eng Essam Morcos in 1980.<br><br>The company offers a
                        comprehensive package of Electro-mechanical services including
                        complete contracting supply and installation works for HVAC,
                        Electrical, Plumbing and Firefighting. HETO has a team of highly
                        experienced engineers and highly skilled technicians eager to
                        fulfil all MEP projects needs.",
            ],
            [
                'type' => 'cr_desc',
                'value' => 'Drafts opens to a new page with the keyboard ready so you can type immediately. Go hands-free with
                        Dictation. Drafts lets you get things down before you forget without fiddling folders, naming, etc.
                        <br /><br />
                        Drafts is a launching-off point for text – use the actions to copy it, share it, or deep link into
                        other apps and services. Compose a tweet or message, create a file in Dropbox, send a task off to
                        Reminders – there are hooks into tons of your favorite apps, New entries go into the Inbox. Once
                        there, you can Tag them for organization, Flag them for importance, or Archive them for long-term
                        storage.
                        <br /><br />
                        Set up a text editing experience that’s perfect for you, with tons of interface adjustments like
                        custom fonts and control over spacing, line height, and margins.',
            ],

        ];


        foreach ($settings as $setting) {
            Setting::create($setting);
        }

    }
}
