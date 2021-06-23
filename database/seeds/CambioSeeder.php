<?php

use App\Cambio;
use Illuminate\Database\Seeder;

class CambioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cambios = [
            [ 'moneda' => 'Bolivares', 'tasa' => 3147297.13, 'created_at'=>now(), 'updated_at'=>now()],
            [ 'moneda' => 'Euro', 'tasa' => 1.19, 'created_at'=>now(),'updated_at'=>now()],
            [ 'moneda' => 'Petro', 'tasa' => 60, 'created_at'=>now(),'updated_at'=>now()],

        ];

        foreach($cambios as $cambio){
            Cambio::create($cambio);
        }
    }
}
