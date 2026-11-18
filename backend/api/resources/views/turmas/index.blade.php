@extends('layouts.app')

@section('title', 'Turmas - Sistema Acadêmico')

@section('content')
<section>
    <header class="page-header">
        <div>
            <h1>Turmas</h1>
            <p>Consulte as turmas cadastradas.</p>
        </div>

        <a class="button-primary" href="{{ url('/turmas/cadastro') }}">Nova turma</a>
    </header>

    <div class="table-container">
        <table class="data-table">
            <caption class="visually-hidden">Lista de turmas</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Período</th>
                    <th scope="col">Capacidade</th>
                    <th scope="col">Data de Início</th>
                    <th scope="col">Data de Término</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($turmas ?? [] as $turma)
                    <tr>
                        <td>{{ $turma->id }}</td>
                        <td>{{ $turma->nome }}</td>
                        <td>
                            @php
                                $periodos = ['M' => 'Matutino', 'N' => 'Noturno', 'D' => 'Diurno'];
                            @endphp
                            {{ $periodos[$turma->periodo] ?? $turma->periodo }}
                        </td>
                        <td>{{ $turma->capacidade }}</td>
                        <td>{{ $turma->dataInicio ? date('d/m/Y', strtotime($turma->dataInicio)) : '-' }}</td>
                        <td>{{ $turma->dataFim ? date('d/m/Y', strtotime($turma->dataFim)) : '-' }}</td>
                        <td>{{ $turma->descricao ?? '-' }}</td>
                        <td>
                            <form action="{{ url('/turmas/' . $turma->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Deseja realmente excluir a turma {{ $turma->nome }}?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center; color: var(--muted); padding: 24px;">
                            Nenhuma turma cadastrada.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection
