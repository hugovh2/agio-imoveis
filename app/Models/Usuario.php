<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'tipo_usuario', 'email', 'senha', 'cpf', 'nome_completo',
        'data_nascimento', 'cnpj', 'razao_social', 'nome_fantasia',
        'telefone', 'termos_aceitos',
    ];

    protected $hidden = ['senha']; // Esconde a senha no JSON
}
