<?php

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
        'cargo',
        'email',
        'salario',
        'data_admissao',
        'departamento_id'
    ];

    public function departamento()
    {
        return $this->hasMany(Departamento::class);
    }

    public function dadosPessoais()
    {
        return $this->hasMany(DadosPessoais::class);
    }
}