<?php

use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('clienteperfilcompra', function (Blueprint $table) {
            $table->id('idclienteperfilcompra');
            $table->foreignId('idcliente')->constrained('cliente', 'idcliente');
            $table->foreignId('idperfil')->constrained('perfil', 'idperfil');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clienteperfilcompra');
    }
};
