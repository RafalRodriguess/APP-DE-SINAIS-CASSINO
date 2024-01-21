@extends('layouts.frontend.app')



<style>
    .login-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
        text-align: center;
        height: 200vh;
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
    background-color: #FF3131;
    margin-top: 0px;

    }

    body {
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.352);

    }

</style>

@section('content')

        <div class="login-container">

                <div><img style="width: 50%; margin-top: 30px;" src="utils/atualizado.png"  alt=""></div>

                <div><h2 style="    margin-bottom: 0px;
                    font-size: 24px;
                    font-weight: 700;
                    line-height: 1.5;
                    text-transform: none;
                    white-space: normal;
                    margin-top: -15px;">SEJA BEM VINDO</h2>
                    
                </div>

                <form method="POST" style="width: 100%;" action="{{ route('login') }}">
                    @csrf


                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-3" style="width: 100%;margin-bottom: 10px;">
                        <input style="width: 100%;" type="text" placeholder="Seu E-mail" name="email" id="email">
                    </div>
                    <div style="width: 100%;margin-bottom: 10px;">
                        <input class="mb-3" style="width: 100%;" type="password" placeholder="Sua Senha" name="password" id="password">
                    </div>

                    <div class="form-group row" styçe="margin-bottom: 20px;">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Lembra-me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div style="width: 100%;margin-top: 10px;">
                        <button type="submit">
                            <span>Acessar</span>
                            <svg class="icons-tab" style="font-size: 30px;" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowForwardRoundedIcon"><path d="M5 13h11.17l-4.88 4.88c-.39.39-.39 1.03 0 1.42.39.39 1.02.39 1.41 0l6.59-6.59c.39-.39.39-1.02 0-1.41l-6.58-6.6a.9959.9959 0 0 0-1.41 0c-.39.39-.39 1.02 0 1.41L16.17 11H5c-.55 0-1 .45-1 1s.45 1 1 1z"></path></svg>
                        </button>
                    </div>

                </form>
        </div>
 
@endsection
