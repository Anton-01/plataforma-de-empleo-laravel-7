<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostuladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulados', function (Blueprint $table) {
            $table->id();
            $table->string('vacante');
            $table->string('empresa');
            $table->string('usuario');
            $table->string('contacto');
            $table->timestamp('postulado');
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
        Schema::dropIfExists('postulados');
    }
}
