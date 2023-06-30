<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('senha_id');
            $table->unsignedBigInteger('balcao_id');
            $table->unsignedBigInteger('funcionario_id');

            $table->foreign('senha_id')->references('id')->on('senhas');
            $table->foreign('balcao_id')->references('id')->on('balcoes');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');



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
        Schema::dropIfExists('atendimentos');
    }
};
