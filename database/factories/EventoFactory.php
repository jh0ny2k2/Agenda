<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->sentence,
            'fecha' => $this->faker->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d'),
            'hora' => $this->faker->time,
            'descripcion' => $this->faker->paragraph,
            'ciudad' => $this->faker->city,
            'direccion' => $this->faker->address,
            'estado' => $this->faker->randomElement(['creado', 'cancelado', 'terminado']),
            'aforoMax' => $this->faker->numberBetween(20, 1000),
            'tipo' => $this->faker->randomElement(['online', 'presencial']),
            'numMaxEntradasPorPersona' => $this->faker->numberBetween(1, 10),
            'categoriaId' => Categoria::inRandomOrder()->first()->id ?? Categoria::factory(),
            'imagen' => $this->faker->imageUrl(640, 480, 'events', true),
            'usuarioId' => User::where('rol', 'creadorEventos')->inRandomOrder()->first()->id ?? User::factory()->state(['rol' => 'creadorEventos']),
            
        ];
    }
}
