@extends('templates.template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            </div>
        </div>
    </div>
    <div class="text-center mt-3 mb-4">
        <h1>Informações do veiculo</h1>
    </div>
    @csrf
    <div class="text-center mt-3 mb-4">
        <h3>Chassi: {{$veiculo->chassi}}</h3>
        <h3>Placa: {{$veiculo->placa}}</h3>
        <h3>Marca: {{$veiculo->marca}}</h3>
        <h3>Valor da compra: {{$veiculo->valor_compra}}</h3>
    </div>
    <br/>
    @php
        $multa=$veiculo->find($veiculo->id)->relMultas;
    @endphp

    
    <div class="col-8 m-auto">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Descricao</th>
            <th scope="col">Orgão</th>
            <th scope="col">Valor</th>
            <th scope="col">Quitacao</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <div class="text-center mt-3 mb-4">
            <h1>Multas</h1>
        </div>

        @foreach($multa as $multas)
        @if($multas->veiculo_id == $veiculo->id)
            <tr>
            <th scope="row">{{$multas->descricao}}</th>
            <td>{{$multas->orgao}}</td>
            <td>{{$multas->valor}}</td>
            <td>
                @if($multas->quitacao == 0)
                Não quitada!
                @else
                Quitada!
                @endif
            </td>
            <td>
            <a href="{{url("multa/$multas->id/edit")}}">
                <button class="btn" style="background-color: #0844a4; color:white">Alterar</button>
            </a>
            <a class="js-del" href="{{url("multa/$multas->id")}}">
                <button class="btn" style="background-color: black; color:white">Excluir</button>
            </a>
            </td>
            </tr>
        @else
            <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        @endif
        @endforeach
        </tbody>
    </table>
    </div>
@endsection