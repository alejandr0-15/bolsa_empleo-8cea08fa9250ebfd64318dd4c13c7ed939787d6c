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
        Schema::create('aplicacion', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->date('fecha'); // fecha DATE NOT NULL
            $table->unsignedBigInteger('idempleo'); // idempleo INT NOT NULL
            $table->unsignedBigInteger('idcurriculum'); // idcurriculum INT NOT NULL
            $table->foreign('idempleo')->references('id')->on('empleos'); // foreign key to Empleos(Id)
            $table->foreign('idcurriculum')->references('id')->on('curriculums'); // foreign key to curriculums(id)

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplicacion');
    }
};
