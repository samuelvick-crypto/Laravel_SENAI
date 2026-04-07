<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <h1>Relatório de Produto</h1>
    <table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Atualizar</th>
            <th>Deletar</th>
        </tr>
    </thead>
    <tbody>
        @forelse($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->produto}}</td>
                <td>{{ $produto->preco}}</td>
                <td>
                    <a href="{{route('produto.atualizar', $produto->id)}}">Atualizar</a>
                </td>
                <td></td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Nenhum Produto encontrado</td>
            </tr>
        @endforelse
    </tbody>
    </table>
</body>
</html>