@extends('templates.template')

@section('content')

    @php $usuario = auth()->user()->id; @endphp
    <a href="{{url("empresa/$usuario/edit")}}">
        <h3 style="margin-left: 02%;">{{auth()->user()->razao_social}}</h3>
    </a>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10"></div>
        <div class="col-sm-2">
            <a href="{{url("multa/create")}}">
                <button class="btn" style="background-color: #0844a4; color:white">Cadastrar Multa</button>
            </a>
        </div>
    </div>

    <div class="col-8 m-auto">
    @csrf
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Placa</th>
            <th scope="col">Chassi</th>
            <th scope="col">Marca</th>
            <th scope="col">Valor</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <div class="text-center mt-3 mb-4">
            <h1>Veiculos</h1>
        </div>
            
            @foreach($veiculo as $veiculos)
            @if($veiculos->empresa_id == auth()->user()->id)
                <tr>
                <th scope="row">{{$veiculos->placa}}</th>
                <td>{{$veiculos->chassi}}</td>
                <td>{{$veiculos->marca}}</td>
                <td>{{$veiculos->valor_compra}}</td>
                <td>
                    
                    <a href="{{url("veiculo/$veiculos->id")}}">
                        <button class="btn" style="background-color: green; color:black">Visualizar</button>
                    </a>
                    <a href="{{url("veiculo/$veiculos->id/edit")}}">
                        <button class="btn" style="background-color: #0844a4; color:white">Alterar</button>
                    </a>
                    <a class="js-del" href="{{url("veiculo/$veiculos->id")}}">
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

    <div class="text-center mt-3 mb-4">
        <a href="{{url('veiculo/create')}}">
            <button class="btn" style="background-color: #0844a4; color:white">Cadastrar</button>
        </a>
    </div>
@endsection