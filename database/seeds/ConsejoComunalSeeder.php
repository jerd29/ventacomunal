<?php

use App\ConsejoComunal;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ConsejoComunalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $consejocomunales =             [
            'CUADRA DE BOLIVAR',
            'GTC',
            'LIDERES DE QUINTA CRESPO',
            'SUR 4',

        ];

        foreach($consejocomunales  as $consejocomunal)
        {
           $inputs[]=['nombre_consejo_comunal'=>$consejocomunal,
                        'created_at'=>now(),
                        'updated_at'=>now(),
                        ];
        } 

        ConsejoComunal::insert($inputs);   

    }
}
