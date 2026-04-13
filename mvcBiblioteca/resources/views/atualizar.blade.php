<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Livro</title>
</head>
<body>
    <h1>Atualizar Livro</h1>

    @if(session('success'))
        <p style="color:green">{{ session('sucess') }}</p>
    @endif

    <form action="{{ route('livro.update', $livro->id)}}" required>
        @csrf
        @method('PUT')

        <input type="text" name="nome" value="{{ old('nome', $livro->nome)}}" required>

        <input type="text" name="autor" value="{{ old('nome', $autor->nome)}}" required>

        <input type="text" name="descrição" value="{{ old('nome', $descrição->nome)}}" required>

        <input type="number" name="números de páginas" value="{{ old('nome', $numeros_de_paginas->nome)}}" required>

        <input type="date" name="data de publicação" value="{{ old('nome', $data_de_publicacao->nome)}}" required>

        <input type="text" name="setores" value="{{ old('nome', $setores->nome)}}" required>

        <input type="number" name="custo" value="{{ old('nome', $custo ->nome)}}" required>

        <input type="number" name="preço" value="{{ old('nome', $preco->nome)}}" required>

        <input type="number" name="imposto" value="{{ old('nome', $imposto->nome)}}" required>

        <button type="submit">Atualizar</button>
    </form>

    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>