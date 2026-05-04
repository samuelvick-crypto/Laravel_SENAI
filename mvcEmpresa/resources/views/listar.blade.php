<h1>Listagem</h1>

@if(isset($funcionarios))
    <h2>Funcionários</h2>

    <a href="{{ route('funcionarios.create') }}">Novo Funcionário</a>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Email</th>
            <th>Departamento</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>

        @foreach($funcionarios as $f)
        <tr>
            <td>{{ $f->nome }}</td>
            <td>{{ $f->cargo }}</td>
            <td>{{ $f->email }}</td>
            <td>{{ $f->departamento->nome }}</td>
            <td>{{ $f->dadosPessoais->cpf }}</td>
            <td>
                <a href="{{ route('funcionarios.edit', $f->id) }}">Editar</a>

                <form action="{{ route('funcionarios.destroy', $f->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endif


@if(isset($departamentos))
    <h2>Departamentos</h2>

    <a href="{{ route('departamentos.create') }}">Novo Departamento</a>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Sigla</th>
        </tr>

        @foreach($departamentos as $d)
        <tr>
            <td>{{ $d->nome }}</td>
            <td>{{ $d->sigla }}</td>
        </tr>
        @endforeach
    </table>
@endif