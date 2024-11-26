<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlteracoesReservasTable extends Migration
{
    public function up()
    {
        Schema::create('alteracoes_reservas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reserva_id')->constrained();
            $table->string('alteracoes', 100);
            $table->date('modificado_em');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alteracoes_reservas');
    }
}
