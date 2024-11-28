<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Admin::class;
    public function definition(): array
    {
        return [
            'admin_name' => $this->faker->name,
            'player_id' => $this->faker->unique()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'username' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => $this->faker->password,
            'student_id_number' => $this->faker->unique()->randomElement(11),
        ];
    }
}