@extends('templates.template')

<style>
    .row {
        margin-top: 25%;
    }
</style>

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="{{route('auth.empresa')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail">Email de acesso</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <br>
                    <div class="text-center mt-3 mb-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('empresa/create')}}">
            <button class="btn">Cadastrar</button>
        </a>
    </div>
@endsection