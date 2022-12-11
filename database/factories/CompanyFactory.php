<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'property_manager' => $this->faker->name,
            'location_p'
            => $this->faker->address(),
            'landlord' => $this->faker->name,
            'location_l'
            => $this->faker->address(),
            'tenant' => $this->faker->name,
            'location_t'
            => $this->faker->address(),
        ];
    }
}
