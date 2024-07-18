<?php

use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('classificacao', function (Blueprint $table) {
            $table->id('idclassificacao');
            $table->string('descricao', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classificacao');
    }
};
