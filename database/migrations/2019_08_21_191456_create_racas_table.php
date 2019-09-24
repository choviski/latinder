<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raca', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome");
            $table->unsignedBigInteger("id_especie");
            $table->foreign("id_especie")->references("id")->on("especies");
            $table->softDeletes();
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
        Schema::dropIfExists('raca');
    }
}
