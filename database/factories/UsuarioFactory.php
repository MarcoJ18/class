<?php

namespace Database\Factories;
use App\Models\Region;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id-clan'            => Region::all()->$id,
            'nombre'            => $this->faker->userName(),
            'contraseña'            => $this->faker->md5(),
            'conectado'            => $this->faker->boolean()
        ];
    }
}
