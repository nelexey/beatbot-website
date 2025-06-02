@extends('auth.layout')

@section('card')

    <div class="auth__window falling-text">
        <h2 class="auth__heading">{{ __('Login') }}</h2>


        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email" class="auth__label">{{ __('Email Address') }}</label>

            <input id="email" type="email" class="auth__input @error('email') is-invalid @enderror"
                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            <br>
            @enderror

            <label for="password" class="auth__label">{{ __('Password') }}</label>

            <input id="password" type="password"
                   class="auth__input @error('password') is-invalid @enderror" name="password" required
                   autocomplete="current-password">

            @error('password')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            <br>
            @enderror


            <div class="auth__flex">
                <div class="checkbox-rect">
                    <input type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <button type="submit" class="auth__button">
                {{ __('Login') }}
            </button>
        </form>
        <p class="auth__switch">У вас нет аккаунта? <a href="{{ route('register') }}">Зарегистрироваться</a></p>



    </div>

@endsection
