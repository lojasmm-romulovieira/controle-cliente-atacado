<?php

use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('cidade', function (Blueprint $table) {
            $table->id('idcidade');
            $table->foreignId('idestado')->constrained('estado', 'idestado');
            $table->string('nome', 191);
            $table->index('idcidade');
        });
    }

    public function down(): void
    {
        Schema::table('cidade', function (Blueprint $table) {
            $table->dropForeign(['idestado']);
        });
        Schema::dropIfExists('cidade');
    }
};
