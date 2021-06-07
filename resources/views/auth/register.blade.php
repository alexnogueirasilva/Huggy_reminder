@extends('layouts.app')

@section('content')
    <main class="form-signin">
        <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            {{--            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}
            <h1 class="h3 mb-3 fw-normal">Faça Login</h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Seu nome"
                       value="{{ old('name') }}">
                <label for="floatingInput">Nome</label>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong></span>
                @endif
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                       value="{{ old('email') }}">
                <label for="floatingInput">Email</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" type="password" placeholder="Senha" name="password">
                <label for="password">Senha</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong></span>
                @endif
            </div>
            <div class="form-floating">
                <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required name="password_confirmation" value="">
                <label for="password-confirm">Cofirmar senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted">Copyright&copy; Alex {{date('Y')}}</p>
        </form>
    </main>
@endsection
