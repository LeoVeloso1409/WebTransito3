<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{

    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'cor',
        'chassi',
        'pais',
        'especie',
        'categoria',
        'proprietario',
        'cpf',
        'endereco',
    ];
    use HasFactory;
}
