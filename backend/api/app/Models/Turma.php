<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'nome',
        'periodo',
        'capacidade',
        'descricao',
        'dataInicio',
        'dataFim',
        'ativo',
    ];

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }
}
