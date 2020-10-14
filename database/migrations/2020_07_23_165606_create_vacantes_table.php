<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('slug')->unique();
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
            $table->string('experiencia')->unique();
            $table->timestamps();
        });

        Schema::create('ubicacions', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('salarios', function (Blueprint $table) {
            $table->id();
            $table->string('salario')->unique();
            $table->timestamps();
        });

        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('slug')->unique();
            $table->string('plazas', '10');
            $table->string('rfc', '30');

            $table->string('escolaridad');
            $table->string('horario');
            $table->string('rango');
            $table->enum('sexo', ['Hombre','Mujer']);
            $table->enum('licencia', ['Si', 'No']);
            $table->enum('cartilla', ['Si', 'No']);

            $table->text('descripcion');
            $table->text('actividades')->nullable();
            $table->text('habilidades')->nullable();

            $table->boolean('condicion')->default(true);

            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('experiencia_id')->constrained()->onDelete('cascade');
            $table->foreignId('ubicacion_id')->constrained()->onDelete('cascade');
            $table->foreignId('salario_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('vacantes');
        Schema::dropIfExists('experiencias');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('ubicacions');
        Schema::dropIfExists('salarios');
    }
}
