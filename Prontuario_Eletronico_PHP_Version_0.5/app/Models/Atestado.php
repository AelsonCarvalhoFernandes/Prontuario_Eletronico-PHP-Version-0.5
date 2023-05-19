<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atestado extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'resume',
        'content',
        'data_emissao',
    ];
}
