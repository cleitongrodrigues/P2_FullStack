<?php

use Illuminate\Support\Facades\Route;

// Redireciona a raiz para a tela de Alunos
Route::get('/', function () {
    return redirect('/alunos');
});

// Rotas do Frontend (Views)
Route::get('/alunos', function () {
    return view('alunos.index');
})->name('alunos.index');

Route::get('/alunos/cadastro', function () {
    return view('alunos.cadastro');
})->name('alunos.create');

Route::get('/turmas', function () {
    return view('turmas.index');
})->name('turmas.index');

Route::get('/turmas/cadastro', function () {
    return view('turmas.cadastro');
})->name('turmas.create');

Route::get('/matriculas', function () {
    return view('matriculas.index');
})->name('matriculas.index');

Route::get('/matriculas/cadastro', function () {
    return view('matriculas.cadastro');
})->name('matriculas.create');
