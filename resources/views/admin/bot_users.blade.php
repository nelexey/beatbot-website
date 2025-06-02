@extends('admin.layout')

@section('heading')<h1>Таблица bot_users</h1>@endsection

@section('description')<b>bot_users</b> - таблица пользователей телеграм бота.@endsection

@section('status')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    @if(session('error'))
        <div class="alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif
@endsection

@section('commands')
    <form action="{{ route('admin.bot_users.update_balance') }}" method="POST" class="admin__command">
        @csrf
        <div class="admin__command__part">
            <p>Изменить balance:</p>
        </div>
        <div class="admin__command__part">
            <label for="user">Пользователь: </label>
            <select name="user" id="user" class="admin__command__select">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                @endforeach
            </select>
        </div>
        <div class="admin__command__part">
            <label for="balance">Изменить: </label>
            <input type="number" name="balance" id="balance" class="admin__command__input" placeholder="сумма изменения">
        </div>
        <input type="submit" value="Обновить" class="admin__button__small">
    </form>
    <form action="{{ route('admin.bot_users.update_processing') }}" method="POST" class="admin__command">
        @csrf
        <div class="admin__command__part">
            <p>Сбросить processing:</p>
        </div>
        <div class="admin__command__part">
            <label for="user">Пользователь: </label>
            <select name="user" id="user" class="admin__command__select">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Сбросить" class="admin__button__small">
    </form>
@endsection

@section('rows')
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            id
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->id }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            username
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->username }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            user_initials
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->user_initials }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            chat_id
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->chat_id }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            balance
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->balance }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            received_beats
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->received_beats }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            beats_vers_messages
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->beats_vers_messages }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            processing
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->processing }}</p>
        @endforeach
    </div>
    <div class="admin__table__item__heading">
        <p class="admin__table__item__heading__row">
            beats_generating
        </p>
        @foreach($users as $user)
            <p class="admin__table__item__heading__row">{{ $user->beats_generating }}</p>
        @endforeach
    </div>
    </div>
@endsection
