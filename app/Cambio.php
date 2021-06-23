<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cambio extends Model
{
    protected $fillable = ['moneda', 'tasa', 'updated_by', 'updated_at'];

    protected $table = 'cambio';

    protected $primaryKey = 'pk_cambio';
}
