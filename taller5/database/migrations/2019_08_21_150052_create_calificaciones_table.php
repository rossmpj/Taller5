<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('calificacion');
            $table->string('cedula');
            $table->string('isbn');
            $table->timestamps();

            $table->foreign('cedula')
            ->references('cedula')->on('usuarios')
            ->onDelete('cascade')
            ->onUpdate('cascade');


             $table->foreign('isbn')
            ->references('isbn')->on('libros')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
}
