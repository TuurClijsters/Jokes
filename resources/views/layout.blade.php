<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/normalize.css" rel="stylesheet" />
        <link href="/css/style.css" rel="stylesheet" />
        <!-- <link href="/css/nav.css" rel="stylesheet" /> -->
        <!-- <link href="/css/scratch.css" rel="stylesheet" /> -->
        <link href="/css/play2.css" rel="stylesheet" />
        <link href="/css/menu.css" rel="stylesheet" />

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lacquer&display=swap" rel="stylesheet">


    </head>
    <body>

        <header>
            <div class = "logo">
                <a href="/"><img src="/img/logo_tuur.png" alt="LOGO" width= "100px" height = "auto"></a>
            </div>
            <div></div>

            <div id="menuArea">
            <input type="checkbox" id="menuToggle"></input>

            <label for="menuToggle" class="menuOpen">
            <div class="open"></div>
            </label>

            <div class="menu menuEffects">
            <label for="menuToggle"></label>
            <div class="menuContent">
                <ul>
                <li><a href="#">MENU 1</a></li>
                <li><a href="#">MENU 2</a></li>
                <li><a href="#">MENU 3</a></li>
                <li><a href="#">MENU 4</a></li>
                </ul>
            </div>
            </div>
            </div>

        </header>
        <main>
            @yield('content')
        </main>
     
    </body>
</html>