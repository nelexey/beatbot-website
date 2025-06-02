@extends('auth.layout')

@section('card')

    <div class="card-header">
        <div class="card-header-title">
            {{ __('Пожалуйста, подтвердите пароль, прежде чем продолжить.') }}
        </div>
    </div>

    <div class="card-content">
        @if ($errors->any())
            <div class="mb-5">
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

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="field">
                <div class="control">
                    <input
                        class="input @error('password') is-danger @enderror"
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        placeholder="Пароль"
                    >
                </div>
                @error('password')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                <button type="submit" class="button">
                    {{ __('Подтвердить') }}
                </button>
            </div>

        </form>
    </div>

@endsection
