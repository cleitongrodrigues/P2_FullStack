<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Matricula;
use App\Models\Turma;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    // GET /matriculas (Listar)
    public function index()
    {
        $matriculas = Matricula::with(['aluno', 'turma'])->get();
        return view('matriculas.index', compact('matriculas'));
    }

    // GET /matriculas/cadastro (Formulário)
    public function create()
    {
        $alunos = Aluno::orderBy('nome')->get();
        $turmas = Turma::orderBy('nome')->get();
        return view('matriculas.cadastro', compact('alunos', 'turmas'));
    }

    // POST /matriculas (Cadastrar)
    public function store(Request $request)
    {
        Matricula::create($request->all());
        return redirect('/matriculas')->with('success', 'Matrícula realizada com sucesso!');
    }

    // DELETE /matriculas/{id} (Excluir)
    public function destroy($id)
    {
        Matricula::destroy($id);
        return redirect('/matriculas')->with('success', 'Matrícula excluída com sucesso!');
    }
}
