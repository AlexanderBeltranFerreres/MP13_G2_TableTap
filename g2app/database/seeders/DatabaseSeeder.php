<?php

namespace Database\Seeders;
use App\Models\Plat;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('provincias')->delete();
        DB::table('municipios')->delete();
        $this->call([
            UserSeeder::class,
            MunicipiProvinciaSeeder::class,
            RestaurantSeeder::class,

            ReservaSeeder::class,
        ]);
        Plat::factory()->count(60)->create();
    }
}
