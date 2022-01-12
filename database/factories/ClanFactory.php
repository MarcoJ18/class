<?php

namespace Database\Factories;

use App\Models\Clan;
use App\Models\Region;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Clan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id-region'            => Region::all()->$id,
            'name   '            => $this->faker->name(),
            'nº de usuarios'         => Usuario::count()
        ];
    }
}
