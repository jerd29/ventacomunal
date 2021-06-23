<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Combo;


class Jornada extends Model
{
    public function combo(){
        return $this->belongsTo(Combo::class, 'fk_jornada');
    }

    protected $fillable = ['nombre_venta', 'fecha_cierre', 'updated_by', 'updated_at'];

    protected $table = 'jornada';

    protected $primaryKey = 'pk_jornada';
}
