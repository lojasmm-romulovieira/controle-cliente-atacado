<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientecnpjagrupador', function (Blueprint $table) {
            $table->id('idclientecnpjagrupador');
            $table->foreignId('idcliente')->constrained('cliente', 'idcliente');
            $table->string('cnpjagrupador', 14);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientecnpjagrupador');
    }
};
