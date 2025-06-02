@extends('layouts.main')

@section('content')
    <div class="intro">
        <header class="container header__container">
            <div class="header">
                <a class="logo" href="/">
                    <img class="logo_img" src="{{ asset('build/img/logotypes/logobeatbot.png') }}">
                    <h3 class="logo_text">BeatBot</h3>
                </a>
            </div>
        </header>
        <div class="container">
            @yield('card')
        </div>
    </div>

@endsection
