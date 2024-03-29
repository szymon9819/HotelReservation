<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Override;

final class HotelFactory extends Factory
{
    protected $model = Hotel::class;

    #[Override]
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'location' => $this->faker->city() . ', ' . $this->faker->country(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
