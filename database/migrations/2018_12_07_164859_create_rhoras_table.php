<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRhorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rhoras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facultad_id')->unsigned();
            $table->integer('sede_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('rhoras')->unsigned()->default(2);
            $table->timestamps();
            
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
        Schema::dropIfExists('rhoras');
    }
}
