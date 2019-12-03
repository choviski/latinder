<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_publicacao");
            $table->foreign("id_publicacao")->references("id")->on("publicacaos");
            $table->unsignedBigInteger("id_usuario");
            $table->foreign("id_usuario")->references("id")->on("usuarios");
            $table->unsignedBigInteger("id_usuario2");
            $table->foreign("id_usuario2")->references("id")->on("usuarios");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conversas');
    }
}
