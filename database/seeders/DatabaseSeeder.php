<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Clan;
use App\Models\Usuario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Region::factory()->count(10)->create();
        Clan::factory()->count(25)->create();
        Usuario::factory()->count(50)->create();
    }
}
