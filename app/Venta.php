<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Combo;


class Venta extends Model
{
    public function combo(){
        return $this->belongsTo(Combo::class, 'fk_combo');
    }

    protected $fillable = ['nombre_venta', 'fk_combo', 'updated_by', 'updated_at',
    'cantidad', 'mismo_banco', 'bolivares', 'dolares', 'nombre', 'fk_consejo_comunal', 'numero_referencia'
    ];

    protected $table = 'venta';

    protected $primaryKey = 'pk_venta';
}
