<?php

use App\Models\Estado;
use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();
            $table->integer('cidade_id')->unsigned();
            $table->foreignIdFor(Estado::class)->constrained();
            $table->string('nome', 191);
        });
    }

    public function down(): void
    {
        Schema::table('cidades', function (Blueprint $table) {
            $table->dropForeign(['estado_id']);
        });
        Schema::dropIfExists('cidades');
    }
};
