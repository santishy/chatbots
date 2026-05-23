<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KnowledgeSource>
 */
class KnowledgeSourceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'type' => $type = $this->faker->randomElement(['pdf', 'website']),
            'path' => match ($type) {
                'pdf' => $this->faker->filePath('pdf'),
                'website' => $this->faker->url(),
                default => null,
            },
            'extracted_content' => $this->faker->paragraphs(3, true),
        ];
    }
}
