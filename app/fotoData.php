<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotoData extends Model
{
    protected $table = 'foto_datas';

    protected $fillable = [

    	'seccion',
    	'titulo',
    	'URL'

    ];
}
