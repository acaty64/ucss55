<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursogrupo', function (Blueprint $table) {
            $table->increments('id');

            // $table->unSignedInteger('grupo_id');
            // $table->unSignedInteger('curso_id');
            $table->string('cod_curso',6);
            $table->string('cod_grupo',3);

            $table->boolean('sw_cambio')->default(false);
            
            // $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade');
            // $table->foreign('curso_id')->references('id')->on('mcursos')->onDelete('cascade');
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
        Schema::drop('cursogrupo');
    }
}
