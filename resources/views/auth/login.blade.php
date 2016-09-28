@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col s12 m6 offset-m3 z-depth-3 card-panel">

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

                <div class="input-field col s12 center">
                    <h4>Login</h4>
                    @include('form-errors')

                </div>

            <div class="row">

                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required autofocus>
                  <label for="email" data-error="E-mail inválido">E-mail</label>
                </div>

            </div>

            <div class="row">

                <div class="input-field col s12">
                  <i class="material-icons prefix">lock</i>
                  <input id="password" type="password" name="password" class="validate" required>
                  <label for="password">Senha</label>
                </div>

            </div>

            <div class="row">          
                <div class="input-field col s12 m12 l12">
                    <input type="checkbox" id="remember" name="remember" />
                    <label for="remember">Lembrar de mim</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6 m6 l6">
                    <p class="margin medium-small"><a href="{{url('/register')}}">Registre-se!</a></p>
                </div>
                <div class="input-field col s6 m6 l6">
                    <p class="margin right-align medium-small">
                        <a href="{{ url('/password/reset') }}">Esqueceu sua senha?</a>
                    </p>
                </div>          
            </div>

            </form>

        </div>
    </div>
</div>
@endsection
