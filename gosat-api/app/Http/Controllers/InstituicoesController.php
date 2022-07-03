<?php

namespace App\Http\Controllers;

use App\Models\Instituicoes;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class InstituicoesController extends Controller
{

    public static function pegarNomeInstituicaoPorId($id){
        return Instituicoes::where('id', $id)->first('nome')->nome;
    }
}
