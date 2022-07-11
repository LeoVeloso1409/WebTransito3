<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condutor extends Model
{
    protected $table = 'condutores';

    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'mae',
        'pai',
        'numero_cnh',
        'categoria_cnh',
        'validade_cnh',
        'primeira_cnh',
        'proprietario',
        'uf_cnh',
        'endereco',
    ];
    use HasFactory;
}
