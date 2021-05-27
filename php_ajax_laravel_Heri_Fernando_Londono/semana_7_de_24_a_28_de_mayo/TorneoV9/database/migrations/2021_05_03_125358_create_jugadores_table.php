<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->foreignId('posicion_id')->constrained('posiciones');
            /* en constrained se especifica el nombre de la tabla
            para que él mismo no tome el nombre pluralisado: posicion->posicions */
            $table->integer('numero');
            $table->string('foto', 100);
            /* ______________________________________________________ */
            /* Se especifica el nombre del campo de la tabla
            y con constrained se toma el nombre de la 
            tabla si hay que especificarlo, sino toma el 
            pluralisado que corresponde a las letras antes de _ más una s. Se 
            unirá con el campo pk de la tabla específica */
            $table->foreignId('equipo_id')->constrained();
            /* en este caso el nombre de la tabla sera tomado como equipos
            y no hay problemas, notese que las tablas se crean con nombres
            pluralisados ejemplo: para equipo, equipos*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugadores');
    }
}
