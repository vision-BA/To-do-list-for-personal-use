<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->optional()->paragraph(),
            'completed' => $this->faker->boolean(20),
            'user_id' => User::factory(),
            'category_id' => null,
        ];
    }

    public function completed(bool $value = true): self
    {
        return $this->state(fn () => ['completed' => $value]);
    }
}