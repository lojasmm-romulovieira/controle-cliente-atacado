<?php

namespace App\Models;

use App\Models\Traits\QueryStringFilterable;
use App\Utils\DBUtils;
use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    use QueryStringFilterable;

    protected $connection = DBUtils::MYSQL->name;
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';

    protected $fillable = [
        'nome',
        'datanascimento',
        'cnpj',
        'razaosocial',
        'idclassificacao',
        'idcidade',
        'telefone',
        'telefone2',
        'celular',
        'email',
        'email2',
        'observacoes',
        'cnpjagrupador',
        'numeroloja',
        'numerovendedor',
        'arealoja',
        'streetview',
        'limitecredito',
        'enviaremail',
        'possuidividapendente',
        'possuicompra',
        'possuiblu',
        'ativo'
    ];

    protected $casts = [
        'enviaremail' => 'boolean',
        'possuidividapendente' => 'boolean',
        'possuicompra' => 'boolean',
        'possuiblu' => 'boolean',
        'ativo' => 'boolean'
    ];

    protected $appends = [
        'ult_venda',
        'ult_lig',
        'aproveitamento',
        'nao_aproveitamento'
    ];

    public function ramos()
    {
        return $this->belongsToMany(RamoModel::class, 'ramocliente', 'idcliente', 'idramo')
            ->withPivot('idramocliente')
            ->withTimestamps();
    }

    public function perfis()
    {
        return $this->belongsToMany(PerfilModel::class, 'clienteperfilcompra', 'idcliente', 'idperfil')
            ->withPivot('idclienteperfilcompra')
            ->withTimestamps();
    }

    public function classificacao()
    {
        return $this->belongsTo(ClassificacaoModel::class, 'idclassificacao', 'idclassificacao');
    }

    public function cidade()
    {
        return $this->belongsTo(CidadeModel::class, 'idcidade', 'idcidade');
    }

    public function historicoligacao()
    {
        return $this->hasMany(HistoricoLigacaoModel::class, 'idcliente', 'idcliente')
            ->orderBy('created_at', 'desc');
    }

    public function usuariocliente()
    {
        return $this->belongsToMany(User::class, 'usuariocliente', 'idcliente', 'idusuario')
            ->withPivot('idusuariocliente')
            ->withTimestamps();
    }

    public function getUltVendaAttribute()
    {
        return $this->historicoligacao->where('fezpedido', true)
            ->sortByDesc('created_at')->first();
    }

    public function getUltLigAttribute()
    {
        return $this->historicoligacao
            ->sortByDesc('created_at')->first();
    }

    public function getAproveitamentoAttribute()
    {
        $totalLigacoes = $this->historicoligacao->count();
        $ligacoesComPedido = $this->historicoligacao->where('fezpedido', true)->count();

        return $totalLigacoes > 0 ? ($ligacoesComPedido / $totalLigacoes) * 100 : 0;
    }

    public function getNaoAproveitamentoAttribute()
    {
        $totalLigacoes = $this->historicoligacao->count();
        $ligacoesComPedido = $this->historicoligacao->where('fezpedido', true)->count();

        return 100 - $this->aproveitamento;
    }
}
