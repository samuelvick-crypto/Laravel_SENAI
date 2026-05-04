<?php

use Illuminate\Database\Eloquent\Model;

class DadosPessoais extends Model
{
    protected $table = 'dados_pessoais';

    protected $fillable = [
        'funcionario_id','cpf','rg',
        'data_nascimento','cep'
    ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}