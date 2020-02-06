<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/normalize.css" rel="stylesheet" />
        <link href="/css/style.css" rel="stylesheet" />
        <link href="/css/nav.css" rel="stylesheet" />
        <link href="/css/scratch.css" rel="stylesheet" />

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">


    </head>
    <body>

        <header>
            <div class = "logo">
                <a href="/"><img src="/img/logo_tuur.png" alt="LOGO" width= "100px" height = "auto"></a>
            </div>
            <div></div>
            <nav role='navigation'>
                <div id="menuToggle">
                    <input type="checkbox" />
                    
                    <span></span>
                    <span></span>
                    <span></span>
                    
                    <ul id="menu">
                    <a href="#"><li>Home</li></a>
                    <a href="#"><li>About</li></a>
                    <a href="#"><li>Info</li></a>
                    <a href="#"><li>Contact</li></a>
                    </ul>
                </div>
            </nav>

        </header>
        <main>
            @yield('content')
        </main>
     
    </body>
</html>