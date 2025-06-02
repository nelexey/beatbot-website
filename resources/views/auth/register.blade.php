@extends('auth.layout')

@section('card')
    <div class="auth__window falling-text">
        <h2 class="auth__heading">{{ __('Register') }}</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label class="auth__label" for="username">{{ __('Name') }}</label>

            <input class="auth__input @error('name') is-invalid @enderror" id="name" type="text" name="name"
                   value="{{ old('name') }}" required autocomplete="name" autofocus><br>
            @error('name')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            <br>
            @enderror

            <label class="auth__label" for="email">{{ __('Email Address') }}</label>

            <input class="auth__input @error('email') is-invalid @enderror" type="email" id="email" name="email" required autocomplete="email" placeholder="example@mail.ru"><br>
            @error('email')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            <br>
            @enderror

            <label class="auth__label" for="password">{{ __('Password') }}</label>

            <input id="password" type="password" class="auth__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Не менее 8 символов"><br>
            @error('password')
            <p class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </p>
            <br>
            @enderror

            <label class="auth__label" for="password">{{ __('Confirm Password') }}</label>

            <input id="password-confirm" type="password" class="auth__input"
                   name="password_confirmation" required autocomplete="new-password"><br>
            <br><br>
            <button class="auth__button" type="submit" value="Войти">{{ __('Register') }}</button>
        </form>
        <p class="auth__switch">Уже есть аккаунт? <a href="{{ route('login') }}">Войти</a></p>
    </div>
@endsection
