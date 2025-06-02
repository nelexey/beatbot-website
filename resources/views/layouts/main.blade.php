<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/style.css', 'resources/css/offer.css', 'resources/css/header.css', 'resources/css/auth.css', 'resources/css/home.css', 'resources/css/adaptation.css', 'resources/js/script.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Goldman&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="icon" href={{asset("build/img/logotypes/logobeatbot.png")}}>
    <title>BeatBot</title>
</head>
<body>
<div class="content">
    @yield('content')
</div>
<footer class="footer">
    <div class="footer__flex">
        <div class="footer__about">
            <h1 class="footer-heading">Бренд</h1>
            <a class="" href="https://t.me/NeuralBeatBot">
                <h3 class="footer__link">Бот в телеграме</h3>
            </a>
            <a class="" href="/offer">
                <h3 class="footer__link">Публичная оферта</h3>
            </a>
            <br>
            <p style="color: #797979;">© <?php echo (date('Y')); ?> BeatBot - Telegram-бот, создающий качественные биты в кратчайшие сроки.</p>
            <br>
            <div style="display: flex;">
                <a class="logo" href="/">
                    <img class="logo_img" src={{ asset("build/img/logotypes/logobeatbot.png") }}>
                    <h3 class="logo_text">BeatBot</h3>
                </a>
            </div>

        </div>
        <div class="footer__contacts">
            <h1 class="footer-heading">Связаться с нами</h1>
            <p style="color: #797979;">Рабочая почта</p>
            <a class="" href="mailto:tech.beatbot@mail.ru">
                <h4 class="footer__link">tech.beatbot@mail.ru</h4>
            </a>
            <br>
            <p style="color: #797979;">Контакты</p>
            <a class="" href="tel:+79781055722">
                <h4 class="footer__link">+7 978 105 57 22</h4>
            </a>
            <br>
            <p style="color: #797979;">Написать в телеграме</p>
            <a class="" href="https://t.me/beatbotfather">
                <h4 class="footer__link">@beatbotfather</h4>
            </a>
            <a class="" href="/about">
                <h4 class="footer__link">@Rancorouseful</h4>
            </a>
        </div>
    </div>
</footer>
</body>

