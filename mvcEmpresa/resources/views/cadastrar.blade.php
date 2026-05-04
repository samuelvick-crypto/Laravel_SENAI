<h1>Cadastrar Departamento</h1>

<form method="POST" action="{{ route('departamentos.store') }}">
    @csrf

    Nome: <input type="text" name="nome"><br>
    Sigla: <input type="text" name="sigla"><br>
    Orçamento: <input type="number" name="orcamento"><br>
    Data Criação: <input type="date" name="data_criacao"><br>

    <button type="submit">Salvar</button>
</form>