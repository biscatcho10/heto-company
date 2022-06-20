<?php

namespace Database\Factories;

use App\Models\Career;
use App\Models\Job;
use App\Models\Upload;
use Illuminate\Database\Eloquent\Factories\Factory;

class CareerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Career::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'full_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->e164PhoneNumber(),
            'job_id' => Job::all()->random()->id,
            'upload_id' => Upload::all()->random()->id,
        ];
    }
}
