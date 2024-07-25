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
            $table->string('cnpj', 14);
            $table->foreignId('idclassificacao')->constrained('classificacao', 'idclassificacao');
            $table->foreignId('idcidade')->nullable()->constrained('cidade', 'idcidade');
            $table->string('razaosocial', 100);
            $table->string('nome', 100)->nullable();
            $table->date('datanascimento')->nullable();
            $table->string('ddd', 2)->nullable();
            $table->string('telefone', 11)->nullable();
            $table->string('fone1', 11)->nullable();
            $table->string('fone2', 11)->nullable();
            $table->string('celular', 11)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('email2', 100)->nullable();
            $table->text('observacoes')->nullable();
            $table->text('cnpjagrupador')->nullable();
            $table->text('streetview')->nullable();
            $table->integer('numeroloja')->default(0);
            $table->integer('numerovendedor')->default(0);
            $table->float('limitecredito', 10)->default(0.0);
            $table->boolean('enviaremail')->default(false);
            $table->boolean('possuidividapendente')->default(false);
            $table->boolean('possuicompra')->default(false);
            $table->boolean('possuiblu')->default(false);
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historicoligacao');
        Schema::dropIfExists('cliente');
    }
};
