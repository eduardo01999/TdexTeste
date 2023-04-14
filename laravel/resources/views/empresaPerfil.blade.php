@extends('templates.template')

@section('content')
    <h1 class="text-center">Informações da empresa</h1>
    
    <div class="col-8 m-auto">

    <form name="editarEmpresa" id="editarEmpresa" method="post" action="{{url("empresa/$empresa->id")}}">
    @method('PUT')
        @csrf
        <label>Razão Social</label>
        <input class="form-control" type="text" name="razao_social" id="razao_social" placeholder="Razão Social" disabled value="{{$empresa->razao_social}}"><br>
        <label>CNPJ</label>
        <input class="form-control" type="text" name="cnpj" id="cnpj" placeholder="CNPJ" disabled value="{{$empresa->cnpj}}"><br>
        <label>Endereço</label>
        <input class="form-control" type="text" name="endereco" id="endereco" placeholder="Endereco" value="{{$empresa->endereco}}"><br>
        <label>Número</label>
        <input class="form-control" type="text" name="numero" id="numero" placeholder="Numero" value="{{$empresa->numero}}"><br>
        <label>Complemento</label>
        <input class="form-control" type="text" name="complemento" id="complemento" placeholder="Complemento" value="{{$empresa->complemento}}"><br>
        <label>Bairro</label>
        <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro" value="{{$empresa->bairro}}"><br>
        <label>CEP</label>
        <input class="form-control" type="text" name="cep" id="cep" placeholder="CEP" value="{{$empresa->cep}}"><br>
        <label>Telefone</label>
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{$empresa->telefone}}"><br>
        <label>email</label>
        <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{$empresa->email}}"><br>
        <input class="btn" style="background-color: #0844a4; color:white" type="submit" value="Editar"><br>
    </form>
        
    </div>
@endsection