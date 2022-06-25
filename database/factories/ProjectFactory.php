<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Upload;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'title2' => $this->faker->name(),
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(1,false),
            'description2' => $this->faker->paragraph(1,false),
            'case_study' => $this->faker->paragraph(1,false),
            'date' => $this->faker->date(),
            'location' => $this->faker->address(),
            'thumbnail_image' => Upload::all()->random()->id,
            'gallery' => "[" . rand(1,2) . "," . rand(3,4) . "]",
            'category_id' => Category::all()->random()->id,
            'project_type_id' => ProjectType::all()->random()->id,
        ];
    }
}
