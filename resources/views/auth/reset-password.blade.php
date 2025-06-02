@extends('auth.layout')

@section('card')
    <div class="auth__window">


        <h2 class="auth__heading">
            {{ __('Восстановить доступ') }}
        </h2>

        @if ($errors->any())
            <div class="auth__hidden">
                <div class="has-text-danger has-text-weight-bold">
                    {{ __('auth.error') }}
                </div>

                <ul class="">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <input type="hidden" name="email" value="{{old('email', $request->email)}}">


            <input
                class="auth__input @error('password') is-danger @enderror"
                id="password"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Новый пароль"
            >

            <input
                class="auth__input @error('password') is-danger @enderror"
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                placeholder="Повторите пароль"
            >

            @error('password')
            <p class="">{{ $message }}</p>
            @enderror

            <br><br>
            <button type="submit" class="auth__button">
                {{ __('Сбросить пароль') }}
            </button>

        </form>

    </div>
@endsection
