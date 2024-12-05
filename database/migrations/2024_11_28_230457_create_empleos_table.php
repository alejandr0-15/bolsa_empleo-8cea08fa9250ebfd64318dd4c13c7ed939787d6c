<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('empleos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empresa');
            $table->string('titulo', 255);
            $table->text('descripcion');
            $table->decimal('salario', 10, 2);
            $table->text('requisitos'); 
            $table->timestamps();

            $table->foreign('id_empresa')->references('id')->on('empresas');
        });
    }


    
    public function down(): void
    {
        Schema::dropIfExists('empleos');
    }
};