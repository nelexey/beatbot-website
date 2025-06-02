<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/style.css', 'resources/css/offer.css', 'resources/css/header.css', 'resources/css/auth.css', 'resources/css/home.css', 'resources/css/admin.css', 'resources/css/adaptation.css', 'resources/js/script.js'])

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
</body>

