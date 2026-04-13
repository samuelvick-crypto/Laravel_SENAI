<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Biblioteca extends Model
{
    protected $fillable = [
        'livro',
        'editora',
        'detalhe'
    ];
}