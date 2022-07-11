<?php

namespace App\Http\Controllers;
use App\Models\Ait;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\PDF;

class WebTransitoController extends Controller
{

    public static function gerarCodAit(){

        $orgao = Auth::user()->orgao;

        if($orgao === 'PMMG'){
            $cod_ait = 'PM-'.date('Y').'-'.idate('U');
            return $cod_ait;
        }
        if($orgao === 'PCMG'){
            $cod_ait = 'PC-'.date('Y').'-'.idate('U');
            return $cod_ait;
        }
    }

    public static function pesquisarAit(){
        return view('ait.pesquisar');
    }

    public function buscaCod_Ait(Request $request){

        //PESQUISA POR CÓDIGO DA AUTUAÇÃO
        $dados =  $request->prefixo.'-'.$request->ano.'-'.$request->cod_ait;
        //$aits = null;
        //dd($dados);
        $aits = Ait::where('status', true)->where("cod_ait", $dados)->get();

        //dd($aits);
        $error = 'Nenhum registro localizado.';
        return view('ait.show', compact('aits', 'error'));

    }
    public function buscaAvancada(Request $request){

        //PESQUISA Avançada
        $aits = Ait::where('status', true)->where('codigo_infracao', $request->codigo_infracao);

        /*
        $aits = Ait::where('status', true)->where(function($request){
            $request->where('codigo_infracao', $request->cod_ait)->orWhere('cidade', $request->cidade)->orWhere('bairro', $request->bairro)
            ->orWhere('logradouro', $request->logradouro)->orWhere('orgao_autuador', $request->orgao_autuador)
            ->orWhere('matricula', $request->matricula)->orWhere('nome', $request->nome)
            ->orWhereBetween('data', [$request->data_inicial, $request->data_final]);
        })->get();
        */

        //dd($aits);
        if ($aits) {
            return view('ait.show', compact('aits'));
        } else {
            $error = 'Nenhum registro localizado.';
            return view('ait.pesquisar', compact('error'));
        }
    }

    public function meusRegistros(){
        $user_id = Auth::user()->id;
        $aitsTrue = Ait::all()->where('user_id', $user_id )->where('status', true)->sortBy('cod_ait');

        return view('ait.meus_registros', compact('aitsTrue'));
    }

    public function imprimirAit($id)
    {

        $ait = Ait::find($id);

        return view('ait.imprimir', compact('ait'));
    }

    public function gerarPDF($id){

        $ait = Ait::find($id);

        view()->share('ait', $ait);
        $pdf = PDF::loadView('pdf_view', $ait);

        return $pdf->download('ait'.'{{$ait->cod_ait}}'.'.pdf');

    }

}
