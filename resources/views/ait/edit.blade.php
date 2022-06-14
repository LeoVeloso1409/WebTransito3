@extends('home')
@section('conteudo')
    <div class="row justify-content-around p-4">
        <div class="col-md-9 w-25 align">
            <div class="input-group">
                <span class="input-group-text">Código AIT</span>
                <input disabled type="text" class="form-control" placeholder="{{ $ait->cod_ait }}">
            </div>
        </div>
    </div>
    <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm" id="formAit">

        <form class="row g-3" method="POST" action="{{route('update.ait', ['id' => $ait->cod_ait])}}">

            @csrf
            @method('PATCH')

            <fieldset class="shadow-sm p-4">
                <legend>Identificação do Veículo</legend>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="placa" class="form-control" id="UpCase" placeholder="Placa" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="marca" class="form-control" id="UpCase" placeholder="Marca" required>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="modelo" class="form-control" id="UpCase" placeholder="Modelo" required>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="cor" class="form-control" id="UpCase" placeholder="Cor" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="chassi" class="form-control" id="UpCase" placeholder="Chassi">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="pais" class="form-control" id="UpCase" placeholder="Pais" required>
                    </div>
                    <div class="col-md-3">
                        <select id="especie" name="especie" class="form-select" required>
                            <option selected>Espécie</option>
                            <option value="PASSAGEIRO">Passageiro</option>
                            <option value="CARGA">Carga</option>
                            <option value="MISTO">Misto</option>
                            <option value="COMPETIÇÃO">Competição</option>
                            <option value="TRAÇÃO">Tração</option>
                            <option value="ESPECIAL">Especial</option>
                            <option value="COLEÇÃO">Coleção</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Identificação do Condutor</legend>
                <div class="row p-2">
                    <div class="col-md-6">
                        <input type="text" name="nome_condutor" class="form-control" id="UpCase" placeholder="Nome">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="cpf_condutor" class="form-control" id="UpCase" placeholder="CPF">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="rg_condutor" class="form-control" id="UpCase" placeholder="RG">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="cnh_condutor" class="form-control" id="UpCase" placeholder="CNH">
                    </div>
                    <div class="col-md-3">
                        <select id="uf_cnh" name="uf_cnh" class="form-select" placeholder="UF-CNH">
                            <option selected>UF-CNH</option>
                            <option value="MG">MG</option>
                            <option value="SP">SP</option>
                            <option value="BA">BA</option>
                            <option value="...">...</option>
                            <option value="DF">DF</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="categoria" name="categoria" class="form-select" placeholder="Categoria">
                            <option selected>Categoria</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="ACC">ACC</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="PPD">PPD</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="date" name="validade_cnh" class="form-control" id="validade_cnh">
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Local/Data/Hora</legend>
                <div class="row p-2">
                    <div class="col-md-5">
                        <input type="text" name="logradouro" class="form-control" id="UpCase" placeholder="Logradouro"
                            required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="numero" class="form-control" id="UpCase" placeholder="Número" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="bairro" class="form-control" id="UpCase" placeholder="Bairro" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="cidade" class="form-control" id="UpCase" placeholder="Cidade" required>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-5">
                        <input type="date" name="data" class="form-control" id="data" required>
                    </div>
                    <div class="col-md-2">
                        <input type="time" name="hora" class="form-control" id="hora" required>
                    </div>
                    <div class="col-md-2">
                        <input disabled type="text" name="uf_mg" value="MG" class="form-control" id="uf_mg" placeholder="UF-MG">
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Identificação da Infração</legend>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="codigo_infracao" class="form-control" id="UpCase"
                            placeholder="Código da Infração" required>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="descricao" class="form-control" id="UpCase" placeholder="Descrição"
                            required>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md-3">
                        <input type="text" name="equipamento_afericao" class="form-control" id="UpCase"
                            placeholder="Equipamento Aferição">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="medicao_realizada" class="form-control" id="UpCase"
                            placeholder="Medição Realizada">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="limite_regulamentado" class="form-control" id="UpCase"
                            placeholder="Limite Regulamentado">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="valor_considerado" class="form-control" id="UpCase"
                            placeholder="Valor Considerado">
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-md">
                        <textarea type="text" name="observacoes" class="form-control" id="UpCase" placeholder="Observações"></textarea>
                    </div>
                </div>
            </fieldset>
            <fieldset class="shadow-sm p-4">
                <legend>Medida Administrativa</legend>
                <div class="row p-2">
                    <div class="col-md-4">
                        <select id="medida1" name="medida1" class="form-select">
                            <option value="null" selected>Selecione</option>
                            <option value="REMOÇÃO">Remoção</option>
                            <option value="RECOLHIMENTO">Recolhimento</option>
                            <option value="RETENÇAO">Retenção</option>
                            <option value="TESTE DE ALCOOLEMIA">Teste de Alcoolemia</option>
                        </select>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select id="medida2" name="medida2" class="form-select">
                            <option value="null" selected>Selecione</option>
                            <option value="CNH/PPD/ACC">CNH/PPD/ACC</option>
                            <option value="CRLV">CRLV</option>
                            <option value="CRV">CRV</option>
                            <option value="VEÍCULO">Veículo</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="ficha_vistoria" class="form-control" id="UpCase"
                            placeholder="Ficha de Vistoria">
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <legend>Anexar Imagem</legend>
                <div class="row p-2">
                    <div class="col-md-6">
                        <input type="file" name="imagem" class="form-control" id="imagem" placeholder="Carregar Imagens">
                    </div>
                </div>
            </fieldset>

            <fieldset class="shadow-sm p-4">
                <div class="row p-2">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-lg">Finalizar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection
