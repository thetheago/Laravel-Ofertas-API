<?php

namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;

class OfertasController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

//        $cpfOferta = new CpfOfertaController($request->cpf);
//        $ofertas = $cpfOferta->pegarOfertasDoCpf();
        return view('ofertas')
            ->with('cpf', $request->cpf);
//            ->with('ofertas', $ofertas);
    }

    /**
     *
     * Função que monta o html com as informações sobre as ofertas e retorna para o ajax na tela de ofertas
     *
     * @param Request $request
     *
     * @return string
     *
     * @throws Exception
     */
    public function montaHtmlCard(Request $request): string
    {
        $html = '';
        foreach ($request->obj as $count => $obj){
            $id_instituicao = data_get($obj, 'ofertas.0.instituicao_id');
            $cod_modalidade = data_get($obj, 'ofertas.0.codModalidade');
            $modalidades = data_get($obj, 'ofertas.0.instituicao.modalidades');
            $valor_solicitado = $obj['valorSolicitado'];
            $qnt_parcelas_solicitadas = $obj['QntParcelaSolicitada'];
            $juros_mes = data_get($obj, 'ofertas.0.jurosMes');

            $instituicao_nome = InstituicoesController::pegarNomeInstituicaoPorId($id_instituicao);
            $modalidade_credito = $this->procuraNoArrayNomeModalidadePorCod($cod_modalidade, $modalidades);
            $valor_a_pagar = $this->calcularValorAPagar($valor_solicitado, $qnt_parcelas_solicitadas, $juros_mes);
            //valor_solicitado:40
            //juros_mes:42
            //qnt_parcelas_solicitadas:41

            $html .= view('template/card-oferta')
                ->with('instituicao_nome', $instituicao_nome)
                ->with('modalidade_credito', $modalidade_credito)
                ->with('valor_a_pagar', number_format($valor_a_pagar, 2))
                ->with('valor_solicitado', number_format($valor_solicitado, 2))
                ->with('juros_mes', $juros_mes)
                ->with('qnt_parcelas_solicitadas', $qnt_parcelas_solicitadas)
                ->with('numero_card', ++$count)
                ->render();
        }

        return $html;

    }

    /**
     * Procurar em cada modalidade qual bate com a que está na oferta do cpf
     *
     * @param string|integer $cod_modalidade
     * @param array $modalidades
     * @return String
     *
     * @throws Exception
     */
    private function procuraNoArrayNomeModalidadePorCod($cod_modalidade, array $modalidades): string
    {
        foreach ($modalidades as $modalidade){
            if($cod_modalidade == $modalidade['cod']){
                return $modalidade['nome'];
            }
        }
        return throw new Exception("Erro inesperado | OfertasController:62");
    }

    /**
     * Calcula valor a pagar por mês de acordo com o valor, num de parcelas e juros
     *
     * @param int $valor
     * @param int $parcelas
     * @param float $juros
     *
     * @return float
     *
     */
    private function calcularValorAPagar($valor, $parcelas, $juros): float
    {

        $parcela_original = $valor / $parcelas;

        $valor_final = 0;

        $juros_parcela = $valor * ($juros / 100);

        for ($i = 0; $i < $parcelas; $i++) {

            $valor_final += $juros_parcela + $parcela_original;

        }

        return $valor_final;

    }
}
