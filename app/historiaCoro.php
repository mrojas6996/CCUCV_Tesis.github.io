<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historiaCoro extends Model
{
    protected $table = 'historia_coros';

    protected $fillable = [

    	'sxn',
    	'info',
    	'descrip'

    ];

    public $timestamps = true;
}
