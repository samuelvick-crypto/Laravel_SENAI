<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
</head>
<body>
    <h1>Cadastro Produto</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{route('produto.salvar') }}" method="POST">
        @csrf
        <label for="produto">Produto: </label>
        <input type="text" name="produto" id="produto" placeholder="Produto..."
            require value="{{ old('produto') }}"
        >
        <br><br>
        <label for="preco">Preço: </label>
        <input type="number" name="preco" id="preco" placeholder="Preço..."
            required value="{{ old('Preco')}}"
        >

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