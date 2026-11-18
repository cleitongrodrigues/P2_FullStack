<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    // GET /turmas (Listar)
    public function index()
    {
        $turmas = Turma::all();
        return view('turmas.index', compact('turmas'));
    }

    // GET /turmas/cadastro (Formulário)
    public function create()
    {
        return view('turmas.cadastro');
    }

    // POST /turmas (Cadastrar)
    public function store(Request $request)
    {
        Turma::create($request->all());
        return redirect('/turmas')->with('success', 'Turma cadastrada com sucesso!');
    }

    // DELETE /turmas/{id} (Excluir)
    public function destroy($id)
    {
        Turma::destroy($id);
        return redirect('/turmas')->with('success', 'Turma excluída com sucesso!');
    }
}
