<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->autoIncrement('idAluno');
            $table->int('dsMatricula');
            $table->foreignId('idEscola')->constrained('escola');
            $table->foreignId('idPessoa')->constrained('pessoa');
            $table->foreignId('idPessoaPerfil')->constrained('pessoa_perfil');
            $table->boolean('matriculado')->default(false);
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
        Schema::dropIfExists('alunos');
    }
}
