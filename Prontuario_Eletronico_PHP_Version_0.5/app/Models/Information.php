<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_nascimento',
        'user_id',
        'foto',
        'numero',
        'sexo',
        'rg',
        'cns',
        'cidade',
        'endereco',
        'bairro',
        'estado',
        'telefone'
    ];
}
