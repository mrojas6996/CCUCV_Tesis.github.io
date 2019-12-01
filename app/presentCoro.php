<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class presentCoro extends Model
{
    protected $table = 'present_coros';

    protected $fillable = [

    	'anio',
    	'evento',
    	'dsc_event'

    ];

    public $timestamps = true;
}
