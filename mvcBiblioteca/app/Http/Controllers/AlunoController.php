<?php

namespace App\Http\Controllers;
use App\Models\Livro;
use App\Models\Biblioteca;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function listar(){

        $livro = Livro::with('biblioteca')->get();
        return view('listar', compact('livros'));
    }

    public function cadastro(){
        $bibliotecas = Turma::get();
        return view('cadastro', compact('biblioteca'));
    }

    public function add(Request $request){

        $request->validate([
            'livro' => 'required|string|max:255',
            'autor' => 'required|string|max:255|unique:livros,autor',
            'turma_id' => 'nullable|exists:turmas,id' 
        ]);

        Livro::create([
            'livro' => $request->livro,
            'editora' => $request->editora,
            'descrição' => $request->descricao,
            'turma_id' => $request->turma_id
        ]);

        return redirect()->back()->with('success','Livro Cadastrado com sucesso!');

    }

    public function atualizar($id){
        $livro = Livro::findOrFail($id);
        return view('atualizar', compact('aluno'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'livro' => 'required|string|max:255',
            'editora' => "required|string|max:255|unique:livro,editora,$id"
        ]);

        $livro = Livro::findOrFail($id);

        $livro->livro = $request->livro;
        $editora->editora = $request->editora;

        $livro->save();
        return redirect()->back()->with('success','Aluno atualizado com suceso');
    }
}