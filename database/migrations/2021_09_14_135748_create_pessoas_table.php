<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->autoIncrement('idPessoa');
            $table->string('nmPessoa');
            $table->string('dsEmail');
            $table->string('dsSenha');
            $table->foreignId('setIdPessoaPerfil')->constrained('pessoa_perfil');
            $table->foreignId('setIdAluno')->constrained('aluno');            
            $table->foreignId('setIdEscola')->constrained('escola');
            $table->boolean('ativo')->default(false);
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
        Schema::dropIfExists('pessoa');
    }
}
