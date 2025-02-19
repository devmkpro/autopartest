<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Alternador', 'Amortecedor Dianteiro', 'Bateria 60Ah', 'Bomba de Combustível',
            'Correia Dentada', 'Vela de Ignição', 'Sensor de Oxigênio', 'Radiador',
            'Disco de Freio', 'Pastilha de Freio', 'Kit Embreagem', 'Junta do Cabeçote',
            'Bomba D\'Água', 'Termostato', 'Filtro de Óleo', 'Filtro de Ar',
            'Filtro de Combustível', 'Bieleta da Suspensão', 'Barra Estabilizadora',
            'Coxim do Motor', 'Lâmpada de Farol', 'Limpador de Para-brisa',
            'Tucho Hidráulico', 'Velocidade Cruzada', 'Rolamento da Roda',
            'Mangueira do Radiador', 'Tensão do Cabo', 'Válvula Termostática',
            'Bobina de Ignição', 'Corpo de Borboleta'
        ];

        return [
            'name' => $this->faker->randomElement($categories),
        ];
    }
}
