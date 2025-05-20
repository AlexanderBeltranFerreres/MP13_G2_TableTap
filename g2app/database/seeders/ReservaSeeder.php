<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reserva;

class ReservaSeeder extends Seeder
{
    public function run(): void
    {
        Reserva::factory()->count(50)->create();
    }
}
