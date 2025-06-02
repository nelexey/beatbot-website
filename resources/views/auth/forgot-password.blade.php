@extends('auth.layout')

@section('card')
    <div class="auth__window">
        @if ($errors->any())
            <div class="auth__hidden">
                <div class="has-text-danger has-text-weight-bold">
                    {{ __('auth.error') }}
                </div>

                <ul class="has-text-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h2 class="auth__heading">Забыли пароль?</h2>

        @if(session('status'))
            <div class="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <label class="auth__label">
                Без проблем. Просто сообщите нам свой адрес электронной почты, и мы пришлем вам
                ссылку для сброса пароля.
            </label>
            <br><br>
            <input
                class="auth__input @error('email') is-danger @enderror"
                id="email"
                type="email"
                name="email"
                value="{{old('email')}}"
                required
                autofocus
                placeholder="Почта"
            >

            @error('email')
            <p class="help is-danger">{{ $message }}</p>
            <br>
            @enderror

            <input
                class="auth__input @error('captcha') is-danger @enderror"
                id="captcha"
                type="text"
                name="captcha"
                required
                placeholder="Введите символы с картинки"
            >
            <br><br>
            <div class="auth__captcha">
                <img class="auth__captcha__img" src="{{ captcha_src('flat') }}" alt="">
            </div>

            @error('captcha')

            <p class="captcha__wrong">{{ $message }}</p>
            @enderror

            <br><br>
            <button type="submit" class="auth__button">
                {{ __('Восстановить пароль') }}
            </button>

        </form>
    </div>
@endsection
