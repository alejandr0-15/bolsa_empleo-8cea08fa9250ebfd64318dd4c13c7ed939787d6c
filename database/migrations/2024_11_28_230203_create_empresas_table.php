<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
{
    Schema::create('empresas', function (Blueprint $table) {
        $table->id();
        $table->string('usuario', 50);
        $table->string('contrasena', 255);
        $table->string('nombre_empresa', 100);
        $table->string('pagina_web', 255);
        $table->text('descripcion_empresa');
        $table->string('activida_empresa', 100);
        $table->string('email', 100);
        $table->string('pais', 50);
        $table->string('codigo_area', 10);
        $table->timestamps();
    });
}




    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
