<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {


        //tabla Camionero
        Schema::create('camioneros', function (Blueprint $table) {
            $table->id();
            $table->string('dni');
            $table->string('poblacion');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('salario');
            $table->timestamps();
        });


        //tabla Camion
        Schema::create('camions', function (Blueprint $table) {
            $table->id();
            $table->string('potencia');
            $table->string('matricula');
            $table->string('modelo');
            $table->string('tipo');
            $table->timestamps();
        });


        //tabla Paquete
        Schema::create('paquetes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('descripcion');
            $table->string('destinatario');
            $table->string('direccion');
            $table->foreignId('camionero_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    



    public function down(): void
    {
        Schema::dropIfExists('paquetes');
        Schema::dropIfExists('camiones');
        Schema::dropIfExists('camioneros');
    }
};
