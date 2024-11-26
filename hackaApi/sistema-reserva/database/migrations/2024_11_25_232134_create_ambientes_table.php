<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbientesTable extends Migration
{
    public function up()
    {
        Schema::create('ambientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('tipo', 50);
            $table->string('status', 50);
            $table->dateTime('hora_funcionamento');
            $table->string('descricao', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ambientes');
    }
}
