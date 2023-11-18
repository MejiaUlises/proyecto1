<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->timestamps();
        });

        Schema::create('tipo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
            
            
        });


        Schema::create('cotizacion', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->string('detalle');
            $table->string('total');
            $table->string('tipo');
            $table->string('fechainiciofin');
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->unsignedBigInteger('id_tipo')->nullable();
            $table->foreign('id_cliente')->references('id')->on('cliente');
            $table->foreign('id_tipo')->references('id')->on('tipo');
            $table->timestamps();
        });
    

    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        
            Schema::dropIfExists('cotizacion');
            Schema::dropIfExists('tipo');
            Schema::dropIfExists('cliente');
        
    }
};
