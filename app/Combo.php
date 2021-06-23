<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jornada;

class Combo extends Model
{
    public function jornada(){
        return $this->belongsTo(Jornada::class, 'fk_jornada');
    }

    protected $fillable = ['nombre_combo', 'precio_dolares', 'fk_jornada'];

    protected $table = 'combo';

    protected $primaryKey = 'pk_combo';
}
