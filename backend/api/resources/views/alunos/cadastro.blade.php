@extends('layouts.app')

@section('title', 'Cadastrar Aluno - Sistema Acadêmico')

@section('content')
<section class="form-page">
    <h1>Cadastro de Alunos</h1>

    <form class="app-form" action="{{ url('/alunos') }}" method="POST" novalidate>
        {{-- Diretiva obrigatória de proteção contra CSRF (Critério de avaliação) --}}
        @csrf

        <div class="form-field">
            <label for="nome">Nome</label>
            <input 
                id="nome"
                name="nome"
                type="text"
                placeholder="Digite o nome do aluno" 
                value="{{ old('nome') }}"
                required 
                aria-invalid="{{ $errors->has('nome') ? 'true' : 'false' }}"
            />
            @error('nome')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="telefone">Telefone</label>
            <input 
                id="telefone"
                name="telefone"
                type="text"
                placeholder="Digite o telefone do aluno" 
                value="{{ old('telefone') }}"
                required 
                aria-invalid="{{ $errors->has('telefone') ? 'true' : 'false' }}"
            />
            @error('telefone')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="email">Email</label>
            <input 
                id="email"
                name="email"
                type="email"
                placeholder="Digite o email do aluno" 
                value="{{ old('email') }}"
                required 
                aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}"
            />     
            @error('email')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-field">
            <label for="dataNascimento">Data de nascimento</label>
            <input
                id="dataNascimento"
                name="dataNascimento"
                type="date"
                value="{{ old('dataNascimento') }}"
                required
                aria-invalid="{{ $errors->has('dataNascimento') ? 'true' : 'false' }}"
            />        
            @error('dataNascimento')
                <p class="form-field-error" role="alert">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="button-primary">Cadastrar Aluno</button>
            <a href="{{ url('/alunos') }}" class="button-secondary">Cancelar</a>
        </div>
    </form>
</section>
@endsection
