<?php

namespace Database\Factories;

use App\Models\Player;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    protected $model = Player::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'player_id' => $this->faker->unique()->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'name' => $this->faker->name,
            'username' => $this->faker->name,
            'password' => $this->faker->password,
            'student_id_number' => $this->faker->unique()->randomElement(11),
        ];
    }
}