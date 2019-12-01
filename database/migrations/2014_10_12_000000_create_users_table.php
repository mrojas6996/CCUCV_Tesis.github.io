<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('role')->default('');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default(Hash::make('12345678'));
            $table->boolean('is_Admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'role' => 'admin',
                'name' => 'administrador',
                'email' => 'administrador@admin.com',
                'is_Admin' => true
            ],

            [
                'role' => 'mod',
                'name' => 'moderador',
                'email' => 'moderador@admin.com',
                'is_Admin' => false
            ],

            [
                'role' => 'user',
                'name' => 'usuario',
                'email' => 'usuario@admin.com',
                'is_Admin' => false
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
