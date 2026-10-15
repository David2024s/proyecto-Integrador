<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('perfiles_tutor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->constrained('usuario')->cascadeOnDelete();
            $table->text('descripcion')->nullable();
            $table->string('nivel_academico', 100);
            $table->string('estado_aprobacion', 20)->default('pendiente'); // 'pendiente', 'aprobado', 'rechazado'
            $table->decimal('tarifa_hora', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('perfiles_tutor');
    }
};
