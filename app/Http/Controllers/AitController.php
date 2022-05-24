<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AitRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Ait;
use App\Models\User;

class AitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $objAit;

    public function __construct(){
        $this->objUser = new User();
        $this->objAit = new Ait();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aits = $this->objAit->all()->sortBy('cod_ait');

        return view('home', compact('aits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'cod_ait' => ['required'],
            'orgao_autuador' => ['required'],
            'matricula' => ['required'],
            'nome' => ['required'],
        ]);

        $ait = Ait::create([
            'user_id'=>$request->user_id,
            'cod_ait'=>$request->cod_ait,
            'orgao_autuador'=>$request->orgao_autuador,
            'matricula'=>$request->matricula,
            'nome'=>$request->nome,
        ]);

        if($ait){
            return redirect(RouteServiceProvider::HOME);
        }
        else{
            return redirect()->back()->with('msgError', 'Erro de Execução.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd("edit");
        $ait = Ait::where("cod_ait", $id)->first();

        //dd($ait);

        return view('ait.edit', compact('ait'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AitRequest $request, $id)
    {
        Ait::where(['cod_ait'=>$id])->update([
            'placa'=>$request->placa,
            'marca'=>$request->marca,
            'modelo'=>$request->modelo,
            'cor'=>$request->cor,
            'chassi'=>$request->chassi,
            'pais'=>$request->pais,
            'especie'=>$request->especie,

            'nome_condutor'=>$request->nome_condutor,
            'cpf_condutor'=>$request->cpf_condutor,
            'rg_condutor'=>$request->rg_condutor,
            'cnh_condutor'=>$request->cnh_condutor,
            'uf_cnh'=>$request->uf_cnh,
            'categoria_cnh'=>$request->categoria_cnh,
            'validade_cnh'=>$request->validade_cnh,

            'logradouro'=>$request->logradouro,
            'numero'=>$request->numero,
            'bairro'=>$request->bairro,
            'cidade'=>$request->cidade,
            'data'=>$request->data,
            'hora'=>$request->hora,

            'codigo_infracao'=>$request->codigo_infracao,
            'descricao'=>$request->descricao,
            'medicao_realizada'=>$request->medicao_realizada,
            'limite_regulamentado'=>$request->limite_regulamentado,
            'valor_considerado'=>$request->valor_considerado,
            'observacoes'=>$request->observacoes,

            'medida1'=>$request->medida1,
            'medida2'=>$request->medida2,
            'ficha_vistoria'=>$request->ficha_vistoria,

            'imagem'=>$request->imagem,
        ]);

        return redirect(RouteServiceProvider::HOME);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
