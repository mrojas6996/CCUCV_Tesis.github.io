<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaCorosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_coros', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->char('sxn', 5);
            $table->text('info');
            $table->text('descrip');
            $table->timestamps();
        });

        DB::table('historia_coros')->insert([
            [
                'id' => 1,
                'sxn' => 'hist',
                'info' => 'Historia',
                'descrip' => 'Seccion Historia'
            ],

            [
                'id' => 2,
                'sxn' => 'mv',
                'info' => 'Mision y Vision',
                'descrip' => 'Mision y Vision',

            ],

            [
                'id' => 3,
                'sxn' => 'val',
                'info' => 'Valores',
                'descrip' => 'Valores',

            ],

            [
                'id' => 4,
                'sxn' => 'recs',
                'info' => 'Reconocimientos',
                'descrip' => 'Reconocimientos',

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
        Schema::dropIfExists('historia_coros');
    }
}
