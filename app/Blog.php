<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'titulo',
        'contenido',
        'idAutor'
    ];

    public $timestamps = true;

    public function Autor(){

        return $this->belongsTo('App\User','idAutor');
    }
}

//Tomado de: http://blog.nubecolectiva.com/como-crear-un-crud-con-laravel-5-6-parte-1/