<?php

namespace App\Http\Controllers;
use App\Models\Ait;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public static function pesquisar(){
        return view('ait.pesquisar');
    }
}
