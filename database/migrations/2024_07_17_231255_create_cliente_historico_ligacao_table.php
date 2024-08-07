<?php

use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('historicoligacao', function (Blueprint $table) {
            $table->id('idhistoricoligacao');
            $table->foreignId('idcliente')->constrained('cliente', 'idcliente');
            $table->boolean('fezpedido')->default(false);
            $table->boolean('atendeuligacao')->default(false);
            $table->string('observacao', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientehistoricoligacao');
    }
};
