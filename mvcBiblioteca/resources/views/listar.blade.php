<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Relatórios dos livros</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>CNPJ</th>
                <th>PAÍS</th>
                <th>CIDADE</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($livro as $livro)
            <tr>{{ $livro->id }}</tr>
            <tr>{{ $livro->nome }}</tr>
            <tr>{{ $livro->cnpj }}</tr>
            <tr>{{ $livro->pais }}</tr>
            <tr>{{ $livro->cidade }}</tr>
            <td>
                <a href="{{route('livro.atualizar', $livro->id)}}">Atualizar</a>
            </td>
            @empty
                <tr>
                    <td colspan="3"> Nenhum livro encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>