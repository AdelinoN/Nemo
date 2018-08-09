@extends('layouts.principal')
@section('title','Entrar')
@section('path')
	Entrar
@stop
@section('conteudo')
<div class="container" width="50%">
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" type="email" name="email" autofocus/>
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    <input class="form-control" type="password" name="password"/>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Lembrar-me</label>  
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Entrar</button>
                
                <a class="btn btn-link" href="{{ route('password.request') }}">Esqueci minha senha.</a>       
            </form>
        </div>
    </div>
</div>
@endsection
