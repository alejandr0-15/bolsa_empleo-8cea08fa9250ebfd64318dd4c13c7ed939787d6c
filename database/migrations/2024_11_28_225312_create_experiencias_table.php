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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('idcurriculum'); // idcurriculum INT NOT NULL
            $table->date('fecha_inicio'); // fecha_inicio DATE NOT NULL
            $table->date('fecha_fin'); // fecha_fin DATE NOT NULL
            $table->text('funciones'); // funciones TEXT NOT NULL
            $table->foreign('idcurriculum')->references('id')->on('curriculums'); // foreign key to curriculums(id)

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};
