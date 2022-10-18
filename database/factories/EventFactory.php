<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // $dummyDate = $this->faker->dateTimeThisMonth();

        $availableHour = $this->faker->numberBetween(10, 18);
        $minutes = [0, 30];
        $mKey = array_rand($minutes);
        $addHour = $this->faker->numberBetween(1, 3);

        $dummyDate = $this->faker->dateTimeThisMonth;
        $startDate = $dummyDate->setTime($availableHour, $minutes[$mKey]);
        $clone = clone $startDate;
        $endDate = $clone->modify('+' . $addHour . 'hour');

        return [
            'name' => $this->faker->name,
            'information'=> $this->faker->realText,
            'max_people' => $this->faker->numberBetween(1,20),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'is_visible' => $this->faker->boolean,
        ];
    }
}
