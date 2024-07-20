<?php

use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('ramocliente', function (Blueprint $table) {
            $table->id('idramocliente');
            $table->foreignId('idcliente')->constrained('cliente', 'idcliente');
            $table->foreignId('idramo')->constrained('ramo', 'idramo');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ramocliente');
    }
};
