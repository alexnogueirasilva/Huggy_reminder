@extends('layouts.app')

@section('content')
    <main class="form-signin">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            {{--            <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">--}}
            <h1 class="h3 mb-3 fw-normal">Faça Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email"
                       value="{{ old('email') }}">
                <label for="floatingInput">Email</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" name="password">
                <label for="floatingPassword">Senha</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong></span>
                @endif
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
