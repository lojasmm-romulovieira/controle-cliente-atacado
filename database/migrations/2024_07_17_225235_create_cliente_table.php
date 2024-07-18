<?php

use App\Utils\DBUtils;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    protected $connection = DBUtils::MYSQL->name;

    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id('idcliente');
            $table->string('nome', 100);
            $table->date('datanascimento');
            $table->string('cnpj', 14);
            $table->string('razaosocial', 100);
            $table->string('cidade', 100);
            $table->string('uf', 2);
            $table->string('ddd', 2);
            $table->string('telefone', 11);
            $table->string('fone1', 11);
            $table->string('fone2', 11);
            $table->string('celular', 11);
            $table->string('email', 100);
            $table->string('email2', 100);
            $table->text('observacoes');
            $table->string('cnpjagrupador', 14);
            $table->integer('numeroloja')->default(0);
            $table->integer('numerovendedor')->default(0);
            $table->text('streetview');
            $table->float('limitecredito', 10);
            $table->boolean('enviaemail')->default(true);
            $table->boolean('possuidividapendente')->default(false);
            $table->boolean('possuicompra')->default(true);
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
