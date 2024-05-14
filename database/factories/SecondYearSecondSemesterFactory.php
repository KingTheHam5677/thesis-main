<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SecondYearSecondSemester>
 */
class SecondYearSecondSemesterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $prerequisiteCount = $this->faker->numberBetween(1, 4);
        $corequisiteCount = $this->faker->numberBetween(1, 4);

        return [
            'course_code' => $this->generateCourseCode(),
            'description' => $this->faker->sentence(3),
            'units' => $this->faker->numberBetween(1, 5),
            'prerequisite' => $this->generateCourseCodes($prerequisiteCount),
            'corequisite' => $this->generateCourseCodes($corequisiteCount),
        ];
    }

    /**
     * Generate a random course code with a number embedded within letters.
     *
     * @return string
     */
    private function generateCourseCode()
    {
        $randomLetters = strtoupper($this->faker->lexify('???')); // Generate random uppercase letters
        $randomNumber = $this->faker->randomNumber(2); // Generate random two-digit number
        $randomPosition = $this->faker->numberBetween(0, strlen($randomLetters)); // Choose a random position to insert the number

        // Insert the random number within the sequence of letters at the chosen position
        $courseCode = substr_replace($randomLetters, $randomNumber, $randomPosition, 0) . '-M';

        return $courseCode;
    }

    /**
     * Generate a string of course codes separated by comma.
     *
     * @param int $count
     * @return string
     */
    private function generateCourseCodes($count)
    {
        $courseCodes = [];
        for ($i = 0; $i < $count; $i++) {
            $courseCodes[] = $this->generateCourseCode();
        }
        return implode(', ', $courseCodes);
    }
}

