<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chatbot>
 */
class ChatbotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => $this->faker->company(),
            'system_prompt' => $this->faker->paragraph(),
            'temperature' => $this->faker->randomFloat(1, 0, 1),
            'model' => $this->faker->randomElement(['gpt-3.5-turbo', 'gpt-4', 'gpt-4-turbo', 'gpt-5']),
        ];
    }
}
