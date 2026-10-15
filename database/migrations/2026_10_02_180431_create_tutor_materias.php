<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tutor_materias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->constrained('perfiles_tutor')->cascadeOnDelete();
            $table->foreignId('materia_id')->constrained('materias')->cascadeOnDelete();
            $table->string('comprobante_url', 255)->nullable();
            $table->string('estado_aprobacion', 20)->default('pendiente'); // 'pendiente', 'aprobado'
            $table->string('modalidad', 20); // 'presencial', 'en_linea', 'hibrido'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tutor_materias');
    }
};
