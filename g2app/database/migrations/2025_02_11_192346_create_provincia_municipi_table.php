<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('municipios', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('provincia_id')->constrained('provincias')->onDelete('cascade');

        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Desactivar les restriccions de clau forana a SQLite
        DB::statement('PRAGMA foreign_keys = OFF;');

        // Eliminar els registres de la taula municipios primer
        DB::table('municipios')->delete();

        Schema::dropIfExists('municipios');
        Schema::dropIfExists('provincias');

        // Reactivar les restriccions de clau forana a SQLite
        DB::statement('PRAGMA foreign_keys = ON;');
    }
};
