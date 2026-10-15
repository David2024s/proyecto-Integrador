<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rol', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('descripcion', 255)->nullable();
            $table->integer('nivel_acceso');
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamps(); // Agrega por defecto created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rol');
    }
};
