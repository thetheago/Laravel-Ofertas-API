<?php

namespace App\Http\Controllers;

use App\Models\Ofertas;
use Illuminate\Http\Request;
use \App\Models\CpfOferta;

class CpfOfertaController extends Controller
{
    public $cpf;

    function __construct($cpf) {
        $this->cpf = CpfController::formataCpf($cpf);
    }

//    public function pegarOfertasDoCpf(){
//        $idsDeOfertaDoCpf = CpfOferta::where('cpf', $this->cpf)->get()->pluck('id_oferta')->toArray();
//        $ofertas = Ofertas::whereIn('id', $idsDeOfertaDoCpf)->get();
//        return $ofertas;
//    }
}
