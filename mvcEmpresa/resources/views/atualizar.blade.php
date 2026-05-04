<h1>Editar Funcionário</h1>

<form method="POST" action="{{ route('funcionarios.update', $funcionario->id) }}">
    @csrf
    @method('PUT')

    Nome: <input type="text" name="nome" value="{{ $funcionario->nome }}"><br>
    Sobrenome: <input type="text" name="sobrenome" value="{{ $funcionario->sobrenome }}"><br>
    Cargo: <input type="text" name="cargo" value="{{ $funcionario->cargo }}"><br>
    Email: <input type="email" name="email" value="{{ $funcionario->email }}"><br>

    Departamento:
    <select name="departamento_id">
        @foreach($departamentos as $d)
            <option value="{{ $d->id }}" {{ $funcionario->departamento_id == $d->id ? 'selected' : '' }}>
                {{ $d->nome }}
            </option>
        @endforeach
    </select>

    <h3>Dados Pessoais</h3>

    CPF: <input type="text" name="cpf" value="{{ $funcionario->dadosPessoais->cpf }}"><br>
    RG: <input type="text" name="rg" value="{{ $funcionario->dadosPessoais->rg }}"><br>

    <button type="submit">Atualizar</button>
</form>