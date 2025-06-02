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

                @yield('heading')

                <form action="/admin">
                    <button class="home__button">К таблицам</button>
                </form>
            </div>
            <p class="admin__description">
                @yield('description')
            </p>
            <br>
            <h3>
                Статус:
            </h3>
            <br>
            <div class="admin__commands">
                @yield('status')
            </div>
            <br>
            <h3>
                Команды:
            </h3>
            <br>
            <div class="admin__commands">
                @yield('commands')
            </div>
            <br>
            <h3>
                Все записи:
            </h3>
            <div class="admin__table">
                @yield('rows')
            </div>
        </div>
    </div>
@endsection
