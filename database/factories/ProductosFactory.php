<?php

namespace Database\Factories;

use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Productos>
 */
class ProductosFactory extends Factory
{
    protected $model = Productos::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'precio' => $this->faker->sentence(),
            'cantidad' => $this->faker->sentence(),
            'categoria' => $this->faker->randomElement(['tecnologia', 'gamer', 'cocina', 'hogar'])
        ];
    }
}
