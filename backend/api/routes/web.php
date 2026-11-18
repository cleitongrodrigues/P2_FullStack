<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

// Redireciona a raiz para /alunos
Route::get('/', fn () => redirect('/alunos'));

// 1. Alunos (Listar, Formulário, Cadastrar, Excluir)
Route::get('/alunos', [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/cadastro', [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');
Route::delete('/alunos/{id}', [AlunoController::class, 'destroy'])->name('alunos.destroy');

// 2. Turmas (Listar, Formulário, Cadastrar, Excluir)
Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas.index');
Route::get('/turmas/cadastro', [TurmaController::class, 'create'])->name('turmas.create');
Route::post('/turmas', [TurmaController::class, 'store'])->name('turmas.store');
Route::delete('/turmas/{id}', [TurmaController::class, 'destroy'])->name('turmas.destroy');

// 3. Matrículas (Listar, Formulário, Cadastrar, Excluir)
Route::get('/matriculas', [MatriculaController::class, 'index'])->name('matriculas.index');
Route::get('/matriculas/cadastro', [MatriculaController::class, 'create'])->name('matriculas.create');
Route::post('/matriculas', [MatriculaController::class, 'store'])->name('matriculas.store');
Route::delete('/matriculas/{id}', [MatriculaController::class, 'destroy'])->name('matriculas.destroy');
