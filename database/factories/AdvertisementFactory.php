<?php

namespace Database\Factories;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class AdvertisementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    // Using the faker library to generate fake data that matches the variable types. 
    public function definition()
    {
        return [
            "id" => Str::uuid(),
            "title" => $this->faker->name(),
            "start_date" => $this->faker->date(),
            "end_date" => $this->faker->date(),
            "type" => $this->faker->randomElement(["vertical", "horizontal"]),
            "url" => $this->faker->url(),
            "type" => $this->faker->randomElement(["publish", "draft"]),
        ];
    }
}
