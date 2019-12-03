<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nome");
            $table->string("login",100)->unique();
            $table->string("senha");
            $table->enum("perguntaSecreta",['Qual a sua comida favorita?','Qual o nome de solteira da sua mãe?','Qual o nome do seu primeiro animal de estimação?','Qual o nome do seu melhor amigo de infância?','Em que cidade você nasceu?']);
            $table->string("resposta");
            $table->string("email",100)->unique();
            $table->integer("perfil");
            $table->string("imagem")->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
