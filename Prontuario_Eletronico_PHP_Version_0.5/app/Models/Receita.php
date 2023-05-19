<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
	    'doctor_id',
	    'medicamento',
	    'observacoes',
	    'data_emissao',
	    'data_expiracao',
    ];
}
