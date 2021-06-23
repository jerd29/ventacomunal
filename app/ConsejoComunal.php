<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsejoComunal extends Model
{
    //

    protected $fillable = ['nombre_consejo_comunal', 'updated_by', 'updated_at'];

    protected $table = 'consejo_comunal';

    protected $primaryKey = 'pk_consejo_comunal';


}
