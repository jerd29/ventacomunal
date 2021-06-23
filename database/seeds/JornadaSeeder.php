<?php

use App\Jornada;
use Illuminate\Database\Seeder;

class JornadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jornadas = [
            [ 'nombre_venta' => 'Combos huevos y Queso', 'fecha_cierre' => now()],
            [ 'nombre_venta' => 'Combos de Hortalizas', 'fecha_cierre' => now()],
            [ 'nombre_venta' => 'Carnicos y Hortalizas', 'fecha_cierre' => now()],

        ];

        foreach($jornadas as $jornada){
            Jornada::create($jornada);
        }
    }
}
