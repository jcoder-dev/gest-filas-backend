<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senha extends Model
{
    use HasFactory;
    protected $table = "senhas";

    protected $fillable = ['estado', 'prioridade', 'servico_id', 'codigo', 'data_criacao'];
}
