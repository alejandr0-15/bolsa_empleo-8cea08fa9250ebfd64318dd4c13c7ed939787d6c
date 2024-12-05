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
        Schema::create('estudios', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('idcurriculo'); // idcurriculo INT NOT NULL
            $table->string('titulo', 255); // titulo VARCHAR(255) NOT NULL
            $table->year('anno'); // anno YEAR NOT NULL
            $table->string('institucion', 255); // institucion VARCHAR(255) NOT NULL
            $table->enum('nivel', ['primario', 'secundario', 'universitario', 'postgrado', 'otro']); // nivel ENUM
            $table->foreign('idcurriculo')->references('id')->on('curriculums'); // foreign key

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudios');
    }
};