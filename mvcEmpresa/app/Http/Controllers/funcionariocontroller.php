<?php 

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::with(['departamento','dadosPessoais'])->get();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        return view('funcionarios.create', compact('departamentos'));
    }

    public function store(Request $request)
    {
        $funcionario = Funcionario::create($request->all());

        DadosPessoais::create([
            'funcionario_id' => $funcionario->id,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'data_nascimento' => $request->data_nascimento,
            'cep' => $request->cep,
        ]);

        return redirect()->route('funcionarios.index');
    }
}