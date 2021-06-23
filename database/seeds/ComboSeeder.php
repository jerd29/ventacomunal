<?php

use App\Combo;
use Illuminate\Database\Seeder;

class ComboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $combos = [
            [ 'nombre_combo' => 'Carton de Huevos', 'precio_dolares' => 2.25, 'fk_jornada' => 1,'created_at'=>now(), 'updated_at'=>now()],
            [ 'nombre_combo' => 'Hortalizas', 'precio_dolares' => 1.22, 'fk_jornada' => 1,'created_at'=>now(), 'updated_at'=>now()],
            [ 'nombre_combo' => 'Combo de Carne', 'precio_dolares' => 6.32, 'fk_jornada' => 2,'created_at'=>now(),'updated_at'=>now()],
            [ 'nombre_combo' => 'Pollo y Huevos', 'precio_dolares' => 4.21, 'fk_jornada' => 3,'created_at'=>now(),'updated_at'=>now()],

        ];

        foreach($combos as $combo){
            Combo::create($combo);
        }
    }
}
