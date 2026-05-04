<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcionario</title>
</head>
<body>
    <h1>Funcionario</h1>

    @if(@session('sucess'))
        <p style="color: green">{{ session('success')}}
    @endsession

   <form action="{{route('funcionario.salvar') }}" method="POST">
        @csrf
        <label for="funcionario">Funcionario: </label>
        <input type="text" name="funcionario" id="funcionario" placeholder="funcionario..."
            require value="{{ old('funcionario') }}"
        >
        <br><br>
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="nome..."
            required value="{{ old('Nome')}}"
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