@extends('templates.template')

@section('content')
    <h1 class="text-center">Cadastrar</h1>
    
    <div class="col-8 m-auto">
        <form name="cadastroEmpresa" id="cadastroEmpresa" method="post" action="{{url('empresa')}}">
            @csrf
            <input class="form-control" type="text" name="cnpj" id="cnpj" required placeholder="CNPJ"><br>
            <input class="form-control" type="text" name="razao_social" id="razao_social" required placeholder="Razão Social"><br>
            <input class="form-control" type="text" name="endereco" id="endereco" required placeholder="Endereço"><br>
            <input class="form-control" type="text" name="numero" id="numero" required placeholder="Número"><br>
            <input class="form-control" type="text" name="complemento" id="complemento" required placeholder="Complemento"><br>
            <input class="form-control" type="text" name="bairro" id="bairro" required placeholder="Bairro"><br>
            <input class="form-control" type="text" name="cep" id="cep" required placeholder="CEP"><br>
            <input class="form-control" type="text" name="telefone" id="telefone" required placeholder="Telefone"><br>
            <input class="form-control" type="text" name="email" id="email" required placeholder="E-Mail"><br>
            <input class="form-control" type="password" name="password" id="password" required placeholder="password"><br>
            <input class="btn btn-primary" type="submit" value="Cadastrar">

        </form>
    </div>
@endsection