@extends('layouts.admin')

@section('content')

    <div class="intro">
        <div class="container header__container">
            <div class="header">
                <a class="logo" href="/">

                    <img class="logo_img" src="{{ asset('build/img/logotypes/logobeatbot.png') }}">
                    <p class="logo_text">BeatBot</p>

                    <p class="admin__for__devs">Админ-панель</p>
                </a>
            </div>
        </div>
        <div class="container admin__window__longer">
            <div class="admin__heading">
                <h1>
                    Таблица users
                </h1>
                <form action="/admin">
                    <button class="home__button">К таблицам</button>
                </form>
            </div>
            <p>
                <b>users</b> - таблица пользователей сайта.
            </p>
            <div class="admin__table">
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
                        name
                    </p>
                    @foreach($users as $user)
                        <p class="admin__table__item__heading__row">{{ $user->name }}</p>
                    @endforeach
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        email
                    </p>
                    @foreach($users as $user)
                        <p class="admin__table__item__heading__row">{{ $user->email }}</p>
                    @endforeach
                </div>
{{--                <div class="admin__table__item__heading">--}}
{{--                    <p class="admin__table__item__heading__row">--}}
{{--                        password--}}
{{--                    </p>--}}
{{--                    @foreach($users as $user)--}}
{{--                        <p class="admin__table__item__heading__row">{{ $user->password }}</p>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        created_at
                    </p>
                    @foreach($users as $user)
                        <p class="admin__table__item__heading__row">{{ $user->created_at }}</p>
                    @endforeach
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        updated_at
                    </p>
                    @foreach($users as $user)
                        <p class="admin__table__item__heading__row">{{ $user->updated_at }}</p>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection










