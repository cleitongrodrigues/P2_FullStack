@extends('layouts.app')

@section('title', 'Matrículas - Sistema Acadêmico')

@section('content')
<section>
    <header class="page-header">
        <div>
            <h1>Matrículas</h1>
            <p>Consulte os alunos matriculados em cada turma.</p>
        </div>

        <a class="button-primary" href="{{ url('/matriculas/cadastro') }}">Nova matrícula</a>
    </header>

    <div class="table-container">
        <table class="data-table">
            <caption class="visually-hidden">Lista de matrículas</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Aluno</th>
                    <th scope="col">Turma</th>
                    <th scope="col">Data da Matrícula</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($matriculas ?? [] as $matricula)
                    <tr>
                        <td>{{ $matricula->id ?? $matricula->ID }}</td>
                        <td>{{ $matricula->aluno->nome ?? $matricula->aluno_nome ?? $matricula->aluno ?? ('Aluno #' . ($matricula->aluno_id ?? $matricula->AlunoID)) }}</td>
                        <td>{{ $matricula->turma->nome ?? $matricula->turma_nome ?? $matricula->turma ?? ('Turma #' . ($matricula->turma_id ?? $matricula->TurmaID)) }}</td>
                        <td>
                            @php
                                $d = $matricula->dataMatricula ?? $matricula->data_matricula ?? $matricula->created_at ?? $matricula->DataMatricula ?? null;
                            @endphp
                            {{ $d ? date('d/m/Y H:i', strtotime($d)) : '-' }}
                        </td>
                        <td>
                            <form action="{{ url('/matriculas/' . ($matricula->id ?? $matricula->ID)) }}" method="POST" style="display:inline;" onsubmit="return confirm('Deseja realmente cancelar esta matrícula?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; color: var(--muted); padding: 24px;">
                            Nenhuma matrícula cadastrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
