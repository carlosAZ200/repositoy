<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Posicion;

class PosicionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posicion = new Posicion();
        $posicion->nombre = "Portero";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Defensa";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Volante";
        $posicion->save();
        $posicion = new Posicion();
        $posicion->nombre = "Delantero";
        $posicion->save();
    }
}
