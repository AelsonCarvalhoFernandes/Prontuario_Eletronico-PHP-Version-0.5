<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'foto',
        'numero',
        'sexo',
        'cidade',
        'endereco',
        'bairro',
        'estado',
        'telefone'
    ];
}
