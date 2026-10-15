<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sesiones', function (Blueprint $table) {
            $table->id();
            
            // Apuntan a la misma tabla 'usuario', usamos onDelete('no action') para evitar problemas en SQL Server
            $table->foreignId('estudiante_id')->constrained('usuario')->onDelete('no action');
            $table->foreignId('tutor_id')->constrained('usuario')->onDelete('no action');
            
            $table->foreignId('materia_id')->constrained('materias')->cascadeOnDelete();
            $table->dateTime('fecha_hora_inicio');
            $table->dateTime('fecha_hora_fin');
            $table->string('estado', 20)->default('pendiente'); // 'pendiente', 'agendada', 'completada', 'cancelada'
            $table->decimal('monto_total', 10, 2);
            $table->text('motivo_cancelacion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sesiones');
    }
};
