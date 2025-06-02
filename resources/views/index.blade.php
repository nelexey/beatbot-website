@extends('layouts.main')

@section("content")
    <div class="intro">
        <div class="container header__container">
            <div class="header">
                <a class="logo" href="/">
                    <img class="logo_img" src="{{ asset('build/img/logotypes/logo.svg') }}">
                </a>
            </div>
        </div>
        <div class="container falling-text">
            <div class="intro__heading">
                <div class="intro__heading__text">
                    <h1>Нейросеть для генерации оригинальных битов</h1>

                    <p>Удобный сервис для создания качественной музыки на основе обученной нейронной сети</p>
                    <!-- <div class="intro__buttons">
                        <a href="https://t.me/NeuralBeatBot" class="intro__button falling-text">
                            <p>Перейти к боту</p>
                        </a>
                        <a href="/auth" class="intro__button falling-text">
                            <p>Создать бит</p>
                        </a>
                    </div> -->
                </div>
            </div>
        </div>

        <div class="billet falling-text">
            <div class="container">
                <div class="billet__flex">
                    <div class="billet__href falling-text">
                        <a class="billet__button" href="https://t.me/NeuralBeatBot">
                            <p>Перейти к боту</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid__container">
        <div class="grid">
            <div class="grid__item item__for_ad">
                <h2>
                    Множество стилей
                </h2>
                <br>
                <p>
                    Генерация битов с помощью <span class="highlight">Neural Networks</span>, <span
                        class="highlight">AI</span>.
                    <br><br>
                    Не имеет аналогов. Собственный разработанный код.
                    <br><br>
                    Множество стилей на выбор.
                    <br><br>

                </p>
                <img class="about__svg" src={{ asset("build/img/illustrations/Styles.svg")}}>
            </div>
            <div class="grid__item item__for_voice">
                <h2>
                    Звук
                </h2>
                <br>
                <p>
                    Качество звука: <span class="highlight">PLATINUM</span>
                    <br>
                    <br>
                    Quality 512-point sinc
                    <br>
                    HQ for all plugins
                    <br>
                    Disable maximum polyphony
                    <br>
                    <br>
                    Все основные форматы: <span class="highlight">.wav</span>, <span class="highlight">.mp3</span>. </p>
                <img class="about__svg" src={{ asset("build/img/illustrations/Formats.svg")}}>
            </div>
            <div class="grid__item item__for_video">
                <h2>
                    <span class="highlight">ALL RIGHTS</span>
                </h2>
                <br>
                <p>
                    на все биты созданные в beatbot.
                </p>
                <img class="about__svg" src={{ asset("build/img/illustrations/Versions.svg")}}>
            </div>
            <div class="grid__item item__styles">
                <div class="item__header">
                    <img src={{ asset('build/img/dollar-icon.svg')}}>
                    <h2>Для рекламы</h2>
                </div>
                <br>
                <p>
                    Хотите, чтобы ваша реклама звучала профессионально и запоминалась?
                    <br><br>
                    Наш Telegram-бот поможет вам создать качественный бит, который подчеркнет уникальность вашего
                    продукта и привлечет внимание аудитории. </p>
            </div>
            <div class="grid__item item__sound">
                <div class="item__header">
                    <img src={{ asset('build/img/music-icon.svg')}}>
                    <h2>Бит под голос</h2>
                </div>
                <br>
                <p>
                    Вы являетесь исполнителем и хотите, чтобы ваша музыка звучала на высшем уровне?
                    <br><br>
                    Наш Telegram-бот поможет вам создать идеальный бит, который подойдет под ваш стиль и поможет вам
                    выделиться на фоне конкурентов.
                    <br>
                    Зачитывайте свои тексты под нашими битами и получайте качественный звук.</p>
            </div>
            <div class="grid__item item__rights">
                <div class="item__header">
                    <img src={{ asset('build/img/play-icon.svg')}}>
                    <h2>Фон для видео</h2>
                </div>
                <br>
                <p>
                    Хотите создать профессиональное видео, которое будет привлекать внимание зрителей?
                    <br><br>
                    Применяйте наши биты как фон для разных видео: от рекламы до видеообзоров и получайте качественный
                    звук.</p>
            </div>
        </div>
    </div>

    <div class="meeting">
        <div class="container">
            <div class="meeting__flex">
                <div class="meeting__phone">

                    <div class="screen__chat">
                        <div class="message from__user">
                            <div class="message__user">
                                Сделай мне бит
                            </div>
                        </div>
                        <div class="message from__bot">
                            <div class="message__bot">
                                Скидываю примеры...
                            </div>
                        </div>
                        <div class="message from__bot">
                            <div class="message__bot message__player">
                                <audio controls id="audio">
                                    <source src="{{ asset("build/audio/examplebeat3.wav")}}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                                <button id="play-pause" class="btn-round">
                                    <img id="play-pause-icon" src={{ asset("build/img/play.png")}} alt="Play">
                                </button>
                                <input id="seek-bar" type="range" min="0" max="100" value="0" class="audio-track">
                            </div>
                        </div>
                        <div class="message from__bot">
                            <div class="message__bot">
                                Нажми и проверь!
                            </div>
                        </div>
                    </div>

                </div>
                <div class="meeting__text">
                    <h1>Почему телеграм-бот?</h1>
                    <br>
                    Создание уникальной музыки может быть сложной задачей, но с помощью нашего Telegram-бота вы сможете
                    создавать качественные биты быстро и легко.<br><br>Наш бот предоставляет простой и интуитивно
                    понятный
                    интерфейс, который позволяет вам выбирать из множества стилей и жанров, настраивать звук и
                    микширование,
                    а также экспортировать готовый трек для дальнейшего использования.<br><br>

                    Благодаря нашему боту вы можете создавать уникальные биты в любое время и в любом месте, используя
                    только свой мобильный телефон или планшет.<br>Наш Telegram-бот является лучшим инструментом для
                    начинающих музыкантов и продюсеров, которые хотят создавать качественную музыку, не тратя много
                    времени
                    и усилий.<br><br>

                    Попробуйте наш бот сегодня и начните создавать свою уникальную музыку уже сейчас!<br><br>
                </div>
            </div>
        </div>
    </div>

@endsection
