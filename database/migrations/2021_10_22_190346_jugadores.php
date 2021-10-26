<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jugadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('jugadores', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger('equipos_id');
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('nick');
            $table->string('edad');
            $table->string('sexo');
            $table->string('telefono')->nullable;
            $table->string('email')->nullable;
            $table->string('ciudadnac');
            $table->string('ciudadres');
            $table->string('estudiante');
            $table->string('escuela');
            $table->string('profesion');
            $table->string('hoby');
            $table->string('foto');
            $table->string('ficha');

            $table->timestamps();

            $table->foreign('equipos_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
