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
        Schema::create('otrosestudios', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('idcurriculo'); // idcurriculo INT NOT NULL
            $table->string('titulo', 100); // titulo VARCHAR(100) NOT NULL
            $table->year('anno'); // anno YEAR NOT NULL
            $table->string('institucion', 100); // institucion VARCHAR(100) NOT NULL
            $table->foreign('idcurriculo')->references('id')->on('curriculums'); // foreign key to curriculums(id)

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otrosestudios');
    }
};
