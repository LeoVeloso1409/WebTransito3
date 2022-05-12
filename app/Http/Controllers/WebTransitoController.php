<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebTransitoController extends Controller
{
    public static function gerarCodAit(){

        $cod_ait = 'PM-'.date('Y').'-'.idate('U');
        return $cod_ait;

        /*
        $users = $this->objUser->all();
        //$user = $users->find($id);
        if($users->orgao === 'pmmg'){
            $cod_ait = 'PM-'.date('Y').'-'.idate('U');
            return $cod_ait;
        }
        if($users->orgao === 'pcmg'){
            $cod_ait = 'PC-'.date('Y').'-'.idate('U');
            return $cod_ait;
        }
        */
    }
}
