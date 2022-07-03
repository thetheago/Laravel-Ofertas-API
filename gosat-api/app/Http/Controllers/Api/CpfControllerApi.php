<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cpf;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\CpfController;


class CpfControllerApi extends Controller
{

    /**
     * Função que retorna o Cpf enviado por POST caso ele exista
     *
     * @return integer
     */
    public function verificaCpf(Request $request): int
    {
        return Cpf::where('cpf', CpfController::formataCpf($request->cpf))->value('cpf');
    }


}
