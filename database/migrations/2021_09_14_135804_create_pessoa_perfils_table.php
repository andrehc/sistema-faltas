<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaPerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_perfil', function (Blueprint $table) {
            $table->autoIncrement('idPessoaPerfil');
            $table->foreignId('idPessoa')->constrained('pessoa');
            $table->int('idPerfil');
            $table->foreignId('idEscola')->constrained('escola');
            $table->int('ano');
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
        Schema::dropIfExists('pessoa_perfil');
    }
}
