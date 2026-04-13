<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro livro</title>
</head>
<body>
    <h1>Cadastro livro</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{route('livro.salvar') }}" method="POST">
        @csrf
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do livro" required value="{{ old('nome')}}">
        <br><br>

        <label for="nome">Autor: </label>
        <input type="text" name="autor" id="autor" placeholder="Autor do livro" required value="{{ old('nome')}}">
        <br><br>

        <label for="nome">Descrição: </label>
        <input type="text" name="descrição" id="descrição" placeholder="Descrição do livro" required value="{{ old('nome')}}">
        <br><br>

        <label for="nome">Números de páginas: </label>
        <input type="number" name="numeros de paginas" id="números de páginas" placeholder="Números de páginas do livro" required value="{{ old('numeros de paginas')}}">
        <br><br>

        <label for="nome">Data de publicação: </label>
        <input type="text" name="data de publicação" id="data de publicação" placeholder="Data de publicação do livro" required value="{{ old('data de publicação')}}">
        <br><br>

        <label for="nome">Setores: </label>
        <input type="text" name="setores" id="setores" placeholder="setores do livro" required value="{{ old('setores')}}">
        <br><br>

        <label for="nome">Custo: </label>
        <input type="text" name="custo" id="custo" placeholder="custo do livro" required value="{{ old('custo')}}">
        <br><br>

        <label for="nome">Preço: </label>
        <input type="text" name="preco" id="preco" placeholder="Preco do livro" required value="{{ old('preco')}}">
        <br><br>

        <label for="nome">Imposto: </label>
        <input type="text" name="imposto do livro" id="imposto do livro" placeholder="Imposto do livro" required value="{{ old('imposto do livro')}}">
        <br><br>

        <br><br>
        <label for="biblioteca_id">ID DA BIBLIOTECA: </label>

        <select name="biblioteca_id" id="biblioteca_id">
            @foreach ($biblioteca as $biblioteca)
                <option value="{{$biblioteca->id}}">{{$biblioteca->serie}}</option>
            @endforeach
        </select>

        <input type="submit" value="Cadastrar">
    </form>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>