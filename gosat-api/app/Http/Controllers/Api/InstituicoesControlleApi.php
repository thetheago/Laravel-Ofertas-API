<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Instituicoes;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InstituicoesControlleApi extends Controller
{
    /**
     * Mostra todos as instituições com relacionamentos de Modalidades
     *
     * @return Collection
     */
    public function instituicoesDoCpf(): Collection
    {
        return Instituicoes::with('modalidades')->get();
    }
}
