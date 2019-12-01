<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('contenido');
            $table->integer('idAutor');
            $table->timestamps();
        });

        DB::table('blogs')->insert([
            [
            'titulo' => 'Blog de prueba', 
            'contenido' => '¡Felicidades, el blog funciona!',
            'idAutor' => 1
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
