<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable = [
        'tom',
        'municipio',
    ];
    use HasFactory;
}
