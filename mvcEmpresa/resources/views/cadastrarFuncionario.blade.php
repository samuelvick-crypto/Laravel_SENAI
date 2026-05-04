<h1>Cadastrar Funcionário</h1>

<form method="POST" action="{{ route('funcionarios.store') }}">
    @csrf

    Nome: <input type="text" name="nome"><br>
    Sobrenome: <input type="text" name="sobrenome"><br>
    Cargo: <input type="text" name="cargo"><br>
    Email: <input type="email" name="email"><br>
    Salário: <input type="number" name="salario"><br>
    Data Admissão: <input type="date" name="data_admissao"><br>

    Departamento:
    <select name="departamento_id">
        @foreach($departamentos as $d)
            <option value="{{ $d->id }}">{{ $d->nome }}</option>
        @endforeach
    </select>

    <h3>Dados Pessoais</h3>

    CPF: <input type="text" name="cpf"><br>
    RG: <input type="text" name="rg"><br>
    Data Nascimento: <input type="date" name="data_nascimento"><br>
    CEP: <input type="text" name="cep"><br>

    <button type="submit">Salvar</button>
</form>