@extends('home')
@section('conteudo')
<div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm">

    <div class="row g-3">
        <fieldset class="shadow-sm p-4">
            <legend>Identificação da Infração</legend>
            <div class="row p-2">
                <div class="col-md-3">
                    <input type="text" name="cod_ait" class="form-control" placeholder="{{$ait->cod_ait}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="orgao_autuador" class="form-control" placeholder="{{$ait->orgao_autuador}}">
                </div>
            </div>
        </fieldset>
        <fieldset class="shadow-sm p-4">
            <legend>Identificação do Veículo</legend>
            <div class="row p-2">
                <div class="col-md-3">
                    <input type="text" name="placa" class="form-control" placeholder="{{$ait->placa}}">
                </div>
                <div class="col-md-4">
                    <input type="text" name="marca" class="form-control" placeholder="{{$ait->marca}}">
                </div>
                <div class="col-md-5">
                    <input type="text" name="modelo" class="form-control" placeholder="{{$ait->modelo}}">
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-3">
                    <input type="text" name="cor" class="form-control" placeholder="{{$ait->cor}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="chassi" class="form-control" placeholder="{{$ait->chassi}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="pais" class="form-control" placeholder="{{$ait->pais}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="especie" class="form-control" placeholder="{{$ait->especie}}">
                </div>
            </div>
        </fieldset>

        <fieldset class="shadow-sm p-4">
            <legend>Identificação do Condutor</legend>
            <div class="row p-2">
                <div class="col-md-6">
                    <input type="text" name="nome_condutor" class="form-control" placeholder="{{$ait->nome_condutor}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="cpf_condutor" class="form-control" placeholder="{{$ait->cpf_condutor}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="rg_condutor" class="form-control" placeholder="{{$ait->rg_condutor}}">
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-3">
                    <input type="text" name="cnh_condutor" class="form-control" placeholder="{{$ait->cnh_condutor}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="uf" class="form-control" placeholder="{{$ait->uf}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="categoria" class="form-control" placeholder="{{$ait->categoria}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="validade_cnh" class="form-control" placeholder="{{$ait->validade_cnh}}">
                </div>
            </div>
        </fieldset>

        <fieldset class="shadow-sm p-4">
            <legend>Local/Data/Hora</legend>
            <div class="row p-2">
                <div class="col-md-5">
                    <input type="text" name="logradouro" class="form-control" placeholder="{{$ait->logradouro}}"
                    >
                </div>
                <div class="col-md-2">
                    <input type="text" name="numero" class="form-control" placeholder="{{$ait->numero}}">
                </div>
                <div class="col-md-2">
                    <input type="text" name="bairro" class="form-control" placeholder="{{$ait->bairro}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="cidade" class="form-control" placeholder="{{$ait->cidade}}">
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-5">
                    <input type="text" name="data" class="form-control" id="data" placeholder="{{$ait->data}}">
                </div>
                <div class="col-md-2">
                    <input type="tex" name="hora" class="form-control" id="hora" placeholder="{{$ait->hora}}">
                </div>
                <div class="col-md-2">
                    <input disabled type="text" name="uf_mg" class="form-control" placeholder="{{$ait->uf_mg}}">
                </div>
            </div>
        </fieldset>

        <fieldset class="shadow-sm p-4">
            <legend>Identificação da Infração</legend>
            <div class="row p-2">
                <div class="col-md-3">
                    <input type="text" name="codigo_infracao" class="form-control"
                        placeholder="{{$ait->codigo_infracao}}">
                </div>
                <div class="col-md-9">
                    <input type="text" name="descricao" class="form-control" placeholder="{{$ait->descricao}}"
                    >
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md-3">
                    <input type="text" name="equipamento_afericao" class="form-control"
                        placeholder="{{$ait->equipamento_afericao}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="medicao_realizada" class="form-control"
                        placeholder="{{$ait->medicao_realizada}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="limite_regulamentado" class="form-control"
                        placeholder="{{$ait->limite_regulamentado}}">
                </div>
                <div class="col-md-3">
                    <input type="text" name="valor_considerado" class="form-control"
                        placeholder="{{$ait->valor_considerado}}">
                </div>
            </div>
            <div class="row p-2">
                <div class="col-md">
                    <textarea type="text" name="observacoes" class="form-control" placeholder="{{$ait->observacoes}}"></textarea>
                </div>
            </div>
        </fieldset>
        <fieldset class="shadow-sm p-4">
            <legend>Medida Administrativa</legend>
            <div class="row p-2">
                <div class="col-md-4">
                    <input type="text" name="medida1" class="form-control" placeholder="{{$ait->medida1}}">
                </div>
                <div class="col-md-4">
                    <input type="text" name="medida2" class="form-control" placeholder="{{$ait->medida2}}">
                </div>
                <div class="col-md-4">
                    <input type="text" name="ficha_vistoria" class="form-control"
                        placeholder="{{$ait->ficha_vistoria}}">
                </div>
            </div>
        </fieldset>

        <fieldset class="shadow-sm p-4">
            <legend>Anexar Imagem</legend>
            <div class="row p-2">
                <div class="col-md-6">
                    <input type="file" name="imagem" class="form-control" id="imagem" placeholder="{{$ait->imagem}}">
                </div>
            </div>
        </fieldset>
        <fieldset class="shadow-sm p-4">
            <legend>Identificação do Agente</legend>
            <div class="row p-2">
                <div class="col-md-3">
                    <input type="text" name="matricula" class="form-control" placeholder="{{$ait->matricula}}">
                </div>
                <div class="col-md-5">
                    <input type="text" name="nome" class="form-control" placeholder="{{$ait->nome}}">
                </div>
            </div>
        </fieldset>

        <fieldset class="shadow-sm p-4">
            <div class="row p-2">
                <div class="col-12">
                    <a class="btn btn-primary btn-lg" href="{{route('imprimirPDF.ait')}}">Gerar PDF</a>
                </div>
            </div>
        </fieldset>
    </div>
</div>
@endsection
