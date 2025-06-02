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
                    Таблица orders
                </h1>
                <form action="/admin">
                    <button class="home__button">К таблицам</button>
                </form>
            </div>
            <p>
                <b>orders</b> - отдельная таблица для хранения параметров бита, выбранных пользователями бота.
            </p>
            <div class="admin__table">
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        id
                    </p>
                    @foreach($orders as $order)
                        <p class="admin__table__item__heading__row">{{ $order->id }}</p>
                    @endforeach
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chat_id
                    </p>
                    @foreach($orders as $order)
                        <p class="admin__table__item__heading__row">{{ $order->chat_id }}</p>
                    @endforeach
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chosen_style
                    </p>
                    @foreach($orders as $order)
                        <p class="admin__table__item__heading__row">{{ $order->chosen_style }}</p>
                    @endforeach
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chosen_bpm
                    </p>
                    @foreach($orders as $order)
                        <p class="admin__table__item__heading__row">{{ $order->chosen_bpm }}</p>
                    @endforeach
                </div>
                <div class="admin__table__item__heading">
                    <p class="admin__table__item__heading__row">
                        chosen_extension
                    </p>
                    @foreach($orders as $order)
                        <p class="admin__table__item__heading__row">{{ $order->chosen_extension }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection










