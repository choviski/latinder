<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome")->nullable();
            $table->enum("pelagem",["longo","curto",'medio']);
            $table->enum("vacinacao",["sim","nao","nao_sei"]);
            $table->enum("porte",["grande","medio","pequeno"]);
            $table->enum("sexo",["macho","femea"]);
            $table->enum("catracao",["sim","nao","nao_sei"]);
            $table->integer("idade")->nullable();
            $table->string("imagem");
            $table->string("descricao");
            $table->enum("cor",["preto","branco","dourado","creme","amarelo","chocolate","mestico"]);
            $table->bigInteger("id_racas");
            $table->bigInteger("id_endereco");
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
        Schema::dropIfExists('animals');
    }
}
