<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fb_id' => $this->faker->numberBetween(1000000000, 2147483647),
            'fb_name' => $this->faker->name,
            'fb_email' => $this->faker->email,
            'ip' => '127.0.0.1'
        ];
    }
}
