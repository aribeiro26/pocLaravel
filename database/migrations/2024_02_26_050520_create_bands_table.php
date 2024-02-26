<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->year('year');
            $table->timestamps(); // Opcional: Se você deseja registrar quando os registros são criados ou atualizados
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bands');
    }
};
