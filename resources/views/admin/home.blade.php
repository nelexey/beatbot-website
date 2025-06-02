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
        <div class="container admin__window">
            <div class="admin__heading">
                <h1>
                    Таблицы:
                </h1>
                <form action="/">
                    <button class="home__button">На главную</button>
                </form>
            </div>
            <div class="admin__tables">
                <form action="/admin/users" target="">
                    <button class="admin__table__button">Пользователи сайта (users)</button>
                </form>
                <form action="/admin/bot_users" target="">
                    <button class="admin__table__button">Пользователи бота (bot_users)</button>
                </form>
                <form action="admin/beats" target="">
                    <button class="admin__table__button">Статистика битов (Beats)</button>
                </form>
                <form action="admin/query" target="">
                    <button class="admin__table__button">Очередь на создание битов (query)</button>
                </form>
                <form action="admin/orders" target="">
                    <button class="admin__table__button">Параметры заказа бита (orders)</button>
                </form>
            </div>
        </div>
    </div>
@endsection
