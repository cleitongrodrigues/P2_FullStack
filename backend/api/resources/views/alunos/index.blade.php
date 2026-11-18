@extends('layouts.app')

@section('title', 'Alunos - Sistema Acadêmico')

@section('content')
<section>
    <header class="page-header">
        <div>
            <h1>Alunos</h1>
            <p>Consulte os alunos cadastrados.</p>
        </div>

        <a class="button-primary" href="{{ url('/alunos/cadastro') }}">Novo aluno</a>
    </header>

    <div class="table-container">
        <table class="data-table">
            <caption class="visually-hidden">Lista de alunos</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>          
                    <th scope="col">Data de Nascimento</th>    
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($alunos ?? [] as $aluno)
                    <tr>
                        <td>{{ $aluno->id ?? $aluno->ID }}</td>
                        <td>{{ $aluno->nome ?? $aluno->Nome }}</td>
                        <td>{{ $aluno->telefone ?? $aluno->Telefone }}</td>
                        <td>{{ $aluno->email ?? $aluno->Email }}</td>
                        <td>
                            @php
                                $nasc = $aluno->dataNascimento ?? $aluno->data_nascimento ?? $aluno->DataNascimento ?? null;
                            @endphp
                            {{ $nasc ? date('d/m/Y', strtotime($nasc)) : '-' }}
                        </td>
                        <td>
                            @php
                                $cad = $aluno->dataCadastro ?? $aluno->created_at ?? $aluno->DataCadastro ?? null;
                            @endphp
                            {{ $cad ? date('d/m/Y H:i', strtotime($cad)) : '-' }}
                        </td>
                        <td>
                            <form action="{{ url('/alunos/' . ($aluno->id ?? $aluno->ID)) }}" method="POST" style="display:inline;" onsubmit="return confirm('Deseja realmente excluir o aluno {{ $aluno->nome ?? $aluno->Nome }}?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; color: var(--muted); padding: 24px;">
                            Nenhum aluno cadastrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
