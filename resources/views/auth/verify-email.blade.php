@extends('auth.layout')

@section('card')
  <div class="card-content">
    @if (session('status') === 'verification-link-sent')
      <div class="has-text-success mb-4">
        На адрес электронной почты, который вы указали при регистрации, была отправлена новая ссылка для подтверждения.
      </div>
    @endif
    <label class="label">
      Спасибо за регистрацию! Прежде чем начать, вам необходимо подтвердить свой адрес электронной почты, щелкнув
      ссылку, которую мы отправили вам на почту. Если вы не получили письмо, мы с радостью отправим вам другое.
    </label>
    <hr>
    <form method="POST" action="{{ route('verification.send') }}">
      @csrf

      <button type="submit" class="button">
        {{ __('Отправить еще раз') }}
      </button>
    </form>
  </div>
@endsection
