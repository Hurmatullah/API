<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
use App\Models\Employee;
use App\Models\Driver;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Car::class;

    public function definition(): array
    {
        return [
            'model' => $this->faker->company . ' ' . $this->faker->word,
            'status' => $this->faker->numberBetween(0, 1),
            'employees_id' => Employee::factory(),
            'comfort_category' => $this->faker->numberBetween(1, 3),
            'driver_id' => Driver::factory(),
        ];
    }
}
