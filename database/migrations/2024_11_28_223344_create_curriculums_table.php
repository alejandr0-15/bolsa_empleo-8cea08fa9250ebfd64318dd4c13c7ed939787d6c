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
        Schema::create('curriculums', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('nombre',100);
            $table->text('objetivo');
            $table->text('presentacion');
            $table->string('email',100);
            $table->string('telefono',15);
            $table->date('fecha_nacimiento');
            $table->string('dui',20);
            $table->string('direccion',255);
            $table->bigInteger('usuario_empleado')->unsigned();
            $table->foreign('usuario_empleado')->references('id')->on('usuario_empleado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculums');
    }
};