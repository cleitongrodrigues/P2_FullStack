@extends('layouts.app')

@section('title', 'Cadastrar Turma - Sistema Acadêmico')

@section('content')
<section class="form-page">
    <h1>Cadastro de Turmas</h1>

    <form class="app-form" action="{{ url('/turmas') }}" method="POST">
        @csrf

        <div class="form-field">
            <label for="nome">Nome da Turma</label>
            <input
                id="nome"
                name="nome"
                type="text"
                placeholder="Digite o nome da turma"
                required
            />
        </div>

        <div class="form-field">
            <label for="periodo">Período</label>
            <select id="periodo" name="periodo" required>
                <option value="">Selecione o período</option>
                <option value="M">Matutino</option>
                <option value="N">Noturno</option>
                <option value="D">Diurno</option>
            </select>
        </div>

        <div class="form-field">
            <label for="capacidade">Capacidade</label>
            <input
                id="capacidade"
                name="capacidade"
                type="number"
                placeholder="Digite a capacidade de alunos"
                required
            />
        </div>

        <div class="form-field">
            <label for="descricao">Descrição</label>
            <textarea
                id="descricao"
                name="descricao"
                placeholder="Digite a descrição da turma"
                rows="4"
            ></textarea>
        </div>

        <div class="form-field">
            <label for="dataInicio">Data de Início</label>
            <input
                id="dataInicio"
                name="dataInicio"
                type="date"
            />
        </div>

        <div class="form-field">
            <label for="dataFim">Data de Término</label>
            <input
                id="dataFim"
                name="dataFim"
                type="date"
            />
        </div>

        <div class="form-actions">
            <button type="submit" class="button-primary">Cadastrar Turma</button>
            <a href="{{ url('/turmas') }}" class="button-secondary">Cancelar</a>
        </div>
    </form>
</section>
@endsection
