@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

            <div class="row">
                <div class="input-field col s12">
                    <h4>Registre-se</h4>
                    @include('form-errors')

                </div>
            </div>

            <div class="row">

                <div class="input-field col s12">
                  <input id="name" type="text" name="name" class="validate" value="{{ old('name') }}" required autofocus>
                  <label for="name" data-error="Nome inválido">Nome</label>
                </div>

            </div>

            <div class="row">

                <div class="input-field col s12 m6">
                  <input id="email" type="text" name="email" class="validate" value="{{ old('email') }}" required>
                  <label for="email" data-error="E-mail inválido">E-mail</label>
                </div>

                <snm-maskinput 
                    id="cpf" 
                    label="CPF" 
                    class="input-field col s12 m6"
                    mask="000.000.000-00"
                    value="{{ old('cpf') }}"
                >                  
                </snm-maskinput>

            </div>

            <div class="row">

                <div class="input-field col s12 m6">
                  <input id="password" type="password" name="password" class="validate" value="{{ old('password') }}" required>
                  <label for="password" data-error="Senha inválida">Senha</label>
                </div>

                <div class="input-field col s12 m6">
                  <input id="password_confirmation" type="password" name="password_confirmation" class="validate" value="{{ old('password_confirmation') }}" required>
                  <label for="password_confirmation" data-error="Senha inválida">Confirme sua senha</label>
                </div>

            </div>

            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>

    </form>

    </div>
</div>
@endsection

