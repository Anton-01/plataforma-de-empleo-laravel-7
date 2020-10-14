<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('rol')->default('empresa');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('actividad_economica')->nullable();
            $table->string('hora_dias_entrevista')->nullable();
            $table->string('nombre_entrevistador')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
