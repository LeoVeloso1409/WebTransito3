<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|numeric',
            'cod_ait' => 'required',
            'orgao_autuador' => 'required',
            'matricula' => 'required',
            'nome' => 'required',
            'placa' => 'required|max:7|min:7',
            'marca' => 'required',
            'modelo' => 'required',
            'cor' => 'required',
            'chassi' => 'alpha_num',
            'pais' => 'required',
            'especie' => 'required',
            'nome_condutor',
            'cpf_condutor',
            'rg_condutor',
            'cnh_condutor',
            'uf_cnh',
            'categoria_cnh',
            'validade_cnh',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'data' => 'required|date',
            'hora'=> 'required',
            'codigo_infracao' => 'required',
            'descricao' => 'required',
            'medicao_realizada',
            'limite_regulamentado',
            'valor_considerado',
            'observacoes',
            'medida1',
            'medida2',
            'ficha_vistoria',
            'imagem' => 'image',
        ];
    }

    public function messages(){

        return[
            'user_id.required' => 'O campo Código de Usuário é obrigatório.',
            'user_id.numeric' => 'O campo Código de Usuário de ser um número inteiro.',
        ];
    }
}
