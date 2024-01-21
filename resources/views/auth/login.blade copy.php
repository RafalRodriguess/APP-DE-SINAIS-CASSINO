@extends('layouts.frontend.app')



<style>
    .login-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
        text-align: center  ;
        height: 100vh;
        align-items: center;
        background-color: rgb(0, 0, 0);
        padding: 25px;
    }

    input {
        padding: 25px;
        border-radius: 3px;
        color: white;
        outline: 1px solid white;
        background-color: rgb(37, 37, 37);
    }

    button {
        display: inline-flex;
        align-items: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    gap: 5px;
    justify-content: center;
    position: relative;
    box-sizing: border-box;
    -webkit-tap-highlight-color: transparent;
    outline: 0px;
    border: 0px;
    margin: 24px 0px 0px;
    cursor: pointer;
    user-select: none;
    vertical-align: middle;
    appearance: none;
    text-decoration: none;
    font-weight: 600;
    font-family: Montserrat, sans-serif;
    font-size: 17px;
    width: 100%;
    line-height: 1.75;
    min-width: 64px;
    transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
    text-transform: none;
    border-radius: 4px;
    box-shadow: none;
    padding: 0.6rem 1.5rem;
    color: white;
    background-color: rgb(21, 136, 6);
    margin-top: 0px;

    }

    body {
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.352);

    }

</style>

@section('content')

        <div class="login-container">

                <div><img style="width: 100%; margin-top: 30px;" src="utils/logo.png"  alt=""></div>

                <div><h2 style="    margin-bottom: 0px;
                    font-size: 24px;
                    font-weight: 700;
                    line-height: 1.5;
                    text-transform: none;
                    white-space: normal;
                    margin-top: -15px;">SEJA BEM VINDO</h2>
                    
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf


                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div style="width: 100%;">
                        <input style="width: 100%;" type="text" placeholder="Seu E-mail" name="email" id="email">
                    </div>
                    <div style="width: 100%;">
                        <input style="width: 100%;" type="text" placeholder="Sua Senha" name="password" id="password">
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Lembra-me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div style="width: 100%;">
                        <button type="submit">
                            <span>Acessar</span>
                            <svg class="icons-tab" style="font-size: 30px;" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowForwardRoundedIcon"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6a.9959.9959 0 0 0-1.41 0c-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path></svg>
                        </button>
                    </div>

                </form>
        </div>
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Acceso') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembra-me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Acceso') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a Senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <!-- <div class="text-center mt-2">
                        <p>
                            <strong>OU Acesse Com</strong>
                        </p>
                        <a href="{{ route('login.provider', 'github') }}" class="btn btn-outline-secondary">Github</a>
                        <a href="{{ route('login.provider', 'google') }}" class="btn btn-outline-danger">Google</a>
                        <a href="{{ route('login.provider', 'facebook') }}" class="btn btn-outline-primary">Facebook</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
