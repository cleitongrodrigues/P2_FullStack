@extends('layouts.app')

@section('title', 'Matricular Aluno - Sistema Acadêmico')

@section('content')
<section class="form-page">
    <h1>Matricular Aluno</h1>

    <form class="app-form" action="{{ url('/matriculas') }}" method="POST" novalidate>
        @csrf

        <div class="form-field">
            <label for="aluno_id">Aluno</label>
            <select id="aluno_id" name="aluno_id" required aria-invalid="{{ $errors->has('aluno_id') ? 'true' : 'false' }}">
                <option value="">Selecione o aluno</option>
                @foreach($alunos ?? [] as $aluno)
                    <option value="{{ $aluno->id ?? $aluno->ID }}" {{ old('aluno_id') == ($aluno->id ?? $aluno->ID) ? 'selected' : '' }}>
                        {{ $aluno->nome ?? $aluno->Nome }} ({{ $aluno->email ?? $aluno->Email }})
                    </option>
                @endforeach
            </select>
            @error('aluno_id')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="turma_id">Turma</label>
            <select id="turma_id" name="turma_id" required aria-invalid="{{ $errors->has('turma_id') ? 'true' : 'false' }}">
                <option value="">Selecione a turma</option>
                @foreach($turmas ?? [] as $turma)
                    <option value="{{ $turma->id ?? $turma->ID }}" {{ old('turma_id') == ($turma->id ?? $turma->ID) ? 'selected' : '' }}>
                        {{ $turma->nome ?? $turma->Nome }}
                    </option>
                @endforeach
            </select>
            @error('turma_id')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="button-primary">Matricular</button>
            <a href="{{ url('/matriculas') }}" class="button-secondary">Cancelar</a>
        </div>
    </form>
</section>
@endsection
