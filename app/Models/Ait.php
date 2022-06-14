<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ait extends Model
{
    protected $table = 'aits';

    // Permitir Mass Assignment nos campos
    protected $fillable = [
        'user_id',
        'cod_ait',
        'orgao_autuador',

        'placa',
        'marca',
        'modelo',
        'cor',
        'chassi',
        'pais',
        'especie',

        'nome_condutor',
        'cpf_condutor',
        'rg_condutor',
        'cnh_condutor',
        'uf_cnh',
        'categoria_cnh',
        'validade_cnh',

        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'data',
        'hora',
        'uf_mg',

        'codigo_infracao',
        'descricao',
        'equipamento_afericao',
        'medicao_realizada',
        'limite_regulamentado',
        'valor_considerado',
        'observacoes',

        'medida1',
        'medida2',
        'ficha_vistoria',

        'imagem',

        'matricula',
        'nome',

        'status',
    ];

    use HasFactory;

    public function relUsers(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function setPlacaAttribute($value)
    {
        $this->attributes['placa'] = mb_strtoupper($value);

    }
    public function setMarcaAttribute($value)
    {
        $this->attributes['marca'] = mb_strtoupper($value);

    }
    public function setModeloAttribute($value)
    {
        $this->attributes['modelo'] = mb_strtoupper($value);

    }
    public function setCorAttribute($value)
    {
        $this->attributes['cor'] = mb_strtoupper($value);

    }
    public function setChassiAttribute($value)
    {
        $this->attributes['chassi'] = mb_strtoupper($value);

    }
    public function setPaisAttribute($value)
    {
        $this->attributes['pais'] = mb_strtoupper($value);

    }
    public function setNomeCondutorAttribute($value)
    {
        $this->attributes['nome_condutor'] = mb_strtoupper($value);

    }
    public function setRgCondutorAttribute($value)
    {
        $this->attributes['rg_condutor'] = mb_strtoupper($value);

    }
    public function setLogradouroAttribute($value)
    {
        $this->attributes['logradouro'] = mb_strtoupper($value);

    }
    public function setBairroAttribute($value)
    {
        $this->attributes['bairro'] = mb_strtoupper($value);

    }
    public function setCidadeAttribute($value)
    {
        $this->attributes['cidade'] = mb_strtoupper($value);

    }
    public function setDescricaoAttribute($value)
    {
        $this->attributes['descricao'] = mb_strtoupper($value);

    }
    public function setMedidaRealizadaAttribute($value)
    {
        $this->attributes['medicao_realizada'] = mb_strtoupper($value);

    }
    public function setLimiteRegulamentadoAttribute($value)
    {
        $this->attributes['limite_regulamentado'] = mb_strtoupper($value);

    }
    public function setValorConsideradoAttribute($value)
    {
        $this->attributes['valor_considerado'] = mb_strtoupper($value);

    }
    public function setObservacoesAttribute($value)
    {
        $this->attributes['observacoes'] = mb_strtoupper($value);

    }
    public function setEquipamentoAfericaoAttribute($value)
    {
        $this->attributes['equipamento_afericao'] = mb_strtoupper($value);

    }
    public function setFichaVistoriaAttribute($value)
    {
        $this->attributes['ficha_vistoria'] = mb_strtoupper($value);

    }
}
