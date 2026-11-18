@extends('layouts.app')

@section('title', 'Matricular Aluno - Sistema Acadêmico')

@section('content')
<section class="form-page">
    <h1>Matricular Aluno</h1>

    <form class="app-form" action="{{ url('/matriculas') }}" method="POST">
        @csrf

        <div class="form-field">
            <label for="aluno_id">Aluno</label>
            <select id="aluno_id" name="aluno_id" required>
                <option value="">Selecione o aluno</option>
                @foreach($alunos ?? [] as $aluno)
                    <option value="{{ $aluno->id }}">
                        {{ $aluno->nome }} ({{ $aluno->email }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-field">
            <label for="turma_id">Turma</label>
            <select id="turma_id" name="turma_id" required>
                <option value="">Selecione a turma</option>
                @foreach($turmas ?? [] as $turma)
                    <option value="{{ $turma->id }}">
                        {{ $turma->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="button-primary">Matricular</button>
            <a href="{{ url('/matriculas') }}" class="button-secondary">Cancelar</a>
        </div>
    </form>
</section>
@endsection
