<?php

namespace Database\Factories;

use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Part>
 */
class PartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carParts = [
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
            'name' => $this->faker->randomElement($carParts),
            'description' => "Peça de reposição para {$this->faker->randomElement(['carro', 'moto', 'caminhão'])}",
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'part_number' => (new Part())->generatePartNumber(),
        ];
    }
}
