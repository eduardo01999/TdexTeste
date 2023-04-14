@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($veiculo))Editar @else Cadastrar Veiculo @endif</h1>
    
    <div class="col-8 m-auto">

    @if(isset($veiculo))
        <form name="editVeiculo" id="editVeiculo" method="post" action="{{url("veiculo/$veiculo->id")}}">
        @method('PUT')
    @else
        <form name="cadastroVeiculo" id="cadastroVeiculo" method="post" action="{{url('veiculo')}}">
    @endif
        
            @csrf
            <input class="form-control" type="text" name="chassi" id="chassi" required placeholder="Chassi" value="{{$veiculo->chassi ?? ''}}"><br>
            <input class="form-control" type="text" name="placa" id="placa" required placeholder="Placa" value="{{$veiculo->placa ?? ''}}"><br>
            <input class="form-control" type="text" name="renavam" id="renavam" required placeholder="Renavam" value="{{$veiculo->renavam ?? ''}}"><br>
            <input class="form-control" type="text" name="marca" id="marca" required placeholder="Marca" value="{{$veiculo->marca ?? ''}}"><br>
            <input class="form-control" type="text" name="valor_compra" id="valor_compra" required placeholder="Valor de compra" value="{{$veiculo->valor_compra ?? ''}}"><br>
            <input class="form-control" type="text" name="empresa_id" id="empresa_id" value="{{auth()->user()->id}}" hidden><br>
            <input class="btn" style="background-color: #0844a4; color:white" type="submit" value="@if(isset($veiculo))Editar @else Cadastrar @endif">

        </form>
    </div>
@endsection