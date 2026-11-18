<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    // GET /alunos - Listar registros
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    // GET /alunos/cadastro - Exibir formulário
    public function create()
    {
        return view('alunos.cadastro');
    }

    // POST /alunos - Cadastrar registro
    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect('/alunos')->with('success', 'Aluno cadastrado com sucesso!');
    }

    // DELETE /alunos/{id} - Excluir registro
    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect('/alunos')->with('success', 'Aluno excluído com sucesso!');
    }
}
