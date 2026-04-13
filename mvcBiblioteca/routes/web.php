<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livro/listar',[LivroController::class, 'listar'])->name('livro.listar');

Route::get('/livro/cadastrar',[LivroController::class, 'cadastro'])->name('livro.cadastro');

Route::get('/livro/{id}/atualizar', [LivroController::class, 'atualizar'])->name('livro.atualizar');

Route::put('/livro/{id}/update',[LivroController::class, 'update'])->name('aluno.update');

Route::get('/biblioteca/cadastrar', function(){ 
    return view('cadastroTurma');
})->name('biblioteca.cadastro');

Route::post('/biblioteca/salvar',[BibliotecaController::class, 'add'])->name('turma.salvar');