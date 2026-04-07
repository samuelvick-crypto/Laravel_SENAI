<?php

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listar(){
        $query = Produto::query();
        $produto = $query->get();
        return view('listar', compact('produto'));
    }

    public function add(Request $request){

        $request->validate([
            'produto' => 'required|string|max:255',
            'preco' => 'required|numeric'
        ]);

        Produto::create([
            'produto' => $request->produto,
            'preco' => $request->preco
        ]);

        return redirect()->back()->with('success', 'Produto Cadastrado com sucesso!');

    }

    public function atualizar($id){
        $produto = Produto::findOrFail($id);
        return view('atualizar', compact('produto'));
    }

    public function update (Request $request, $id){
        $request->validate([
            'produto' => 'required|string|max:255',
            'preco' => "required|numeric|unique:produtos,preco,$id"
        ]);

        $produto = Produto::findOrFail($id);

        $produto->produto = $request->produto;
        $produto->preco = $request->preco;

        $produto->save();
        return redirect()->back()->with('success', 'Produto atualizado com suceso');
    }
}