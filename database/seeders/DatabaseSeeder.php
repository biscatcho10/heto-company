<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (User::all()->count() == 0)
            $this->call(UserSeeder::class);
        $this->call(UploadsSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ProjectTypesSeeder::class);
        $this->call(JobSeeder::class);
        Project::factory()->count(10)->create();
        Career::factory()->count(5)->create();
        $this->call(SettingSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(ClientSeeder::class);
    }
}
