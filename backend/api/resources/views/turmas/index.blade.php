@extends('layouts.app')

@section('title', 'Turmas - Sistema Acadêmico')

@section('content')
<section>
    <header className="page-header" class="page-header">
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
                        <td>{{ $turma->id ?? $turma->ID }}</td>
                        <td>{{ $turma->nome ?? $turma->Nome }}</td>
                        <td>
                            @php
                                $p = $turma->periodo ?? $turma->Periodo ?? '';
                                $periodoMap = ['M' => 'Matutino', 'N' => 'Noturno', 'D' => 'Diurno'];
                            @endphp
                            {{ $periodoMap[$p] ?? $p }}
                        </td>
                        <td>{{ $turma->capacidade ?? $turma->Capacidade }}</td>
                        <td>
                            @php
                                $ini = $turma->dataInicio ?? $turma->data_inicio ?? $turma->DataInicio ?? null;
                            @endphp
                            {{ $ini ? date('d/m/Y', strtotime($ini)) : '-' }}
                        </td>
                        <td>
                            @php
                                $fim = $turma->dataFim ?? $turma->data_fim ?? $turma->DataFim ?? null;
                            @endphp
                            {{ $fim ? date('d/m/Y', strtotime($fim)) : '-' }}
                        </td>
                        <td>{{ $turma->descricao ?? $turma->Descricao ?? '-' }}</td>
                        <td>
                            <form action="{{ url('/turmas/' . ($turma->id ?? $turma->ID)) }}" method="POST" style="display:inline;" onsubmit="return confirm('Deseja realmente excluir a turma {{ $turma->nome ?? $turma->Nome }}?');">
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
