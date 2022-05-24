@extends('home')
@section('index')
    <div class="container-fluid w-75 m-auto p-4 position-static h-auto d-md-inline-flex d-none shadow-sm" id="table">
        <table class="table table-primary table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código AIT</th>
                    <th scope="col">Código Infração</th>
                    <th scope="col">Placa</th>
                    <th scope="col">Agente</th>
                    <th scope="col">Matricula</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aits as $ait)
                    @php
                        $user = $ait->find($ait->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$ait->cod_ait}}</th>
                        <td>{{$ait->codigo_infracao}}</td>
                        <td>{{$ait->placa}}</td>
                        <td>{{$ait->nome}}</td>
                        <td>{{$ait->matricula}}</td>
                        <td>
                            <a href="{{url("editait/$ait->cod_ait")}}"> <button class="btn btn-secondary">Iniciar</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
