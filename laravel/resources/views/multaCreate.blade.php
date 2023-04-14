@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($multa))Editar @else Cadastrar Multa @endif</h1>
    
    <div class="col-8 m-auto">

    @if(isset($multa))
        <form name="editMulta" id="editMulta" method="post" action="{{url("multa/$multa->id")}}">
        @method('PUT')
    @else
        <form name="cadastroMulta" id="cadastroMulta" method="post" action="{{url('multa')}}">
    @endif
        
            @csrf
            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição" required value="{{$multa->descricao ?? ''}}"><br>
            <input class="form-control" type="text" name="orgao" id="orgao" placeholder="Orgão" required value="{{$multa->orgao ?? ''}}"><br>
            <input class="form-control" type="text" name="valor" id="valor" placeholder="Valor" required value="{{$multa->valor ?? ''}}"><br>
            @if(isset($multa))
                @if($multa->quitacao==0)
                    <select class="form-control" required name="quitacao" id="quitacao">
                        <option value=0>Não quitada</option>
                        <option value=1>Quitada</option>
                    </select><br>
                @endif
                @php
                    date_default_timezone_set('America/Sao_Paulo');
                @endphp
                <input class="form-control" type="text" name="quitacao_hora" id="quitacao_hora" value="{{date('Y-m-d H:i')}}" hidden><br>
            @endif
            @if(isset($multa))

            @else
            <select class="form-control" required name="veiculo_id" id="veiculo_id">
                <option value="">Selecione a placa do veiculo multado</option>

                @foreach($veiculo as $veiculos)
                @if($veiculos->empresa_id == auth()->user()->id)
                <option value="{{$veiculos->id}}">{{$veiculos->placa}}</option>
                @endif
                @endforeach
            </select><br>
            @endif
            
            <input class="btn" style="background-color: #0844a4; color:white" type="submit" value="@if(isset($multa))Editar @else Cadastrar @endif">
            
        </form>
    </div>
@endsection