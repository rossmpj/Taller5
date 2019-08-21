<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibroautoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libroautores', function (Blueprint $table) {
             $table->bigIncrements('idl');
            $table->string('isbn');
            $table->bigInteger('id')->unsigned();
            $table->timestamps();

            $table->foreign('isbn')
            ->references('isbn')->on('libros')
            ->onDelete('cascade')
            ->onUpdate('cascade');


             $table->foreign('id')
            ->references('id')->on('autores')
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
        Schema::dropIfExists('libroautores');
    }
}
