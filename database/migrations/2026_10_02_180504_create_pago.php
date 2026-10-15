<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pago', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sesion_id')->constrained('sesiones')->cascadeOnDelete();
            $table->decimal('monto', 10, 2);
            $table->decimal('monto_comision', 10, 2);
            $table->decimal('monto_tutor', 10, 2);
            $table->string('metodo_pago', 50); // 'Tarjeta', 'Transferencia'
            $table->string('estado_pago', 20)->default('retenido'); // 'retenido', 'liberado', 'reembolsado'
            $table->timestamp('fecha_pago')->useCurrent();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
