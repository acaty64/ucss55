<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMcursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod_curso',6);
            $table->string('wcurso',150);
            $table->integer('ht')->nullable();
            $table->integer('hp')->nullable();
            $table->string('abreviatur',20)->nullable();
            $table->integer('creditos')->nullable();
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
        Schema::drop('mcursos');
    }
}
