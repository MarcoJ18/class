<?php

namespace Database\Factories;

use App\Models\Region;
use App\Models\Clan;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Region::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pais'            => $this->faker->country(),
            'nº de clanes'         =>Clan::count()
        ];
    }
}
