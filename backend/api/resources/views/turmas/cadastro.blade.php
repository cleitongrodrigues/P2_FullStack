@extends('layouts.app')

@section('title', 'Cadastrar Turma - Sistema Acadêmico')

@section('content')
<section class="form-page">
    <h1>Cadastro de Turmas</h1>

    <form class="app-form" action="{{ url('/turmas') }}" method="POST" novalidate>
        @csrf

        <div class="form-field">
            <label for="nome">Nome da Turma</label>
            <input
                id="nome"
                name="nome"
                type="text"
                placeholder="Digite o nome da turma"
                value="{{ old('nome') }}"
                required
                aria-invalid="{{ $errors->has('nome') ? 'true' : 'false' }}"
            />
            @error('nome')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="periodo">Período</label>
            <select id="periodo" name="periodo" required aria-invalid="{{ $errors->has('periodo') ? 'true' : 'false' }}">
                <option value="">Selecione o período</option>
                <option value="M" {{ old('periodo') === 'M' ? 'selected' : '' }}>Matutino</option>
                <option value="N" {{ old('periodo') === 'N' ? 'selected' : '' }}>Noturno</option>
                <option value="D" {{ old('periodo') === 'D' ? 'selected' : '' }}>Diurno</option>
            </select>
            @error('periodo')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="capacidade">Capacidade</label>
            <input
                id="capacidade"
                name="capacidade"
                type="number"
                placeholder="Digite a capacidade da turma"
                value="{{ old('capacidade') }}"
                required
                aria-invalid="{{ $errors->has('capacidade') ? 'true' : 'false' }}"
            />
            @error('capacidade')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="descricao">Descrição</label>
            <textarea
                id="descricao"
                name="descricao"
                placeholder="Digite a descrição da turma"
                rows="4"
            >{{ old('descricao') }}</textarea>
            @error('descricao')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="dataInicio">Data de Início</label>
            <input
                id="dataInicio"
                name="dataInicio"
                type="date"
                value="{{ old('dataInicio') }}"
                required
                aria-invalid="{{ $errors->has('dataInicio') ? 'true' : 'false' }}"
            />
            @error('dataInicio')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="dataFim">Data de Término</label>
            <input
                id="dataFim"
                name="dataFim"
                type="date"
                value="{{ old('dataFim') }}"
                required
                aria-invalid="{{ $errors->has('dataFim') ? 'true' : 'false' }}"
            />
            @error('dataFim')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="button-primary">Cadastrar Turma</button>
            <a href="{{ url('/turmas') }}" class="button-secondary">Cancelar</a>
        </div>
    </form>
</section>
@endsection
