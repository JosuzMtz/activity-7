<?php

namespace Database\Factories;

use App\Models\Kit;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'course_key' => strtoupper($this->faker->bothify('ROB####')),
            // could produce: rob4723  → strtoupper → ROB4723

            'title' => $this->faker->sentence(3),
            'cover_image' => $this->faker->filePath(),
            'content' => $this->faker->paragraphs(3,true),
            'material' => $this->faker->word(),

            "kit_id" => Kit::inRandomOrder()->first()->id
            //^^^ needs App\models\Kit pa que jaleesta webada ^^^
        ];
    }
}
