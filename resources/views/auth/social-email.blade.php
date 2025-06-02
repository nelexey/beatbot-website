@extends('auth.layout')

@section('card')

  <div class="card-header">
    <div class="card-header-title">
      {{ __('Спасибо за регистрацию! У вас в профиле не указана почта, необходимая для доступа к сайту, пожалуйста, укажите ее. Мы отправим вам пароль для возможности входа через почту + пароль.') }}
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

    <form method="POST" action="{{ route('auth_fill_email') }}">
      @csrf
      <input type="hidden" name="token" value="{{ $token }}">

      <div class="field">
        <div class="control">
          <input
            class="input @error('email') is-danger @enderror"
            id="email"
            type="email"
            name="email"
            value="{{old('email')}}"
            required
            autofocus
            placeholder="Почта"
          >
        </div>
        @error('email')
        <p class="help is-danger">{{ $message }}</p>
        @enderror
      </div>

      <div class="field is-grouped">
        <button type="submit" class="button">
          {{ __('Завершить регистрацию') }}
        </button>
      </div>

    </form>

  </div>
@endsection
