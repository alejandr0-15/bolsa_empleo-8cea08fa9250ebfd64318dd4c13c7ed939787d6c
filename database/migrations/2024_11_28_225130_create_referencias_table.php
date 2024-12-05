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
        Schema::create('referencias', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('idcurriculum'); // idcurriculum INT NOT NULL
            $table->string('nombre', 75); // nombre VARCHAR(75) NOT NULL
            $table->string('parentesco', 75); // parentesco VARCHAR(75) NOT NULL
            $table->string('profesion', 100); // profesion VARCHAR(100) NOT NULL
            $table->string('telefono', 15); // telefono VARCHAR(15) NOT NULL
            $table->foreign('idcurriculum')->references('id')->on('curriculums'); // foreign key to curriculums(id)

            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referencias');
    }
};
