<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'class' => $this->faker->randomElement(['Guerrero', 'Mago', 'Picaro', 'Cazador','Brujo','Sacerdote','Druida','Caballero de la muerte']),
            'spec' => $this->faker->randomElement(['Frost', 'Fire', 'Arcane', 'Assassination', 'Combat', 'Survival']),
            'role' => $this->faker->randomElement(['Tank', 'DPS', 'Healer']),
            'core' => $this->faker->randomElement(['Principal', 'Secundario', '/']),
        ];
    }
}
