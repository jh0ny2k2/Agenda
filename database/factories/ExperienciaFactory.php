<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experiencia>
 */
class ExperienciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->words(3, true),
            'fechaInicio' => $this->faker->date(),
            'fechaTexto' => $this->faker->date() . ' - ' . $this->faker->date(),
            'descripcionCorta' => $this->faker->text(200),
            'precioPorPersona' => $this->faker->randomFloat(2, 5, 160),
            'linkWeb' => $this->faker->url,
            'descripcionLarga' => $this->faker->text(500),
            'empresaId' => Empresa::inRandomOrder()->first()->id ?? Empresa::factory(),
            'imagen' => $this->faker->imageUrl(640, 480, 'experiencia', true),
        ];
    }
}
