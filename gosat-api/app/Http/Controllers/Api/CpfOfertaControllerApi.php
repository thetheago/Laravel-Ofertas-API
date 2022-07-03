<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CpfController;
use App\Models\CpfOferta;
use App\Models\Ofertas;
use Illuminate\Http\Request;

class CpfOfertaControllerApi extends Controller
{

    public function pegarOfertasDoCpf(Request $request){
        return CpfOferta::where('cpf', CpfController::formataCpf($request->cpf))->with('ofertas.instituicao.modalidades')->get();
    }
}
