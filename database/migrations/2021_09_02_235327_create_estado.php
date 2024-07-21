<?php

use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->id('idestado');
            $table->char('uf', 2);
            $table->string('nome', 191);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estado');
    }
};
