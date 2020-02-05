<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="/css/normalize.css" rel="stylesheet" />
        <link href="/css/style.css" rel="stylesheet" />
        <link href="/css/nav.css" rel="stylesheet" />

        <!-- FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">


    </head>
    <body>

        <header>
            <div class = "logo">
                <img src="/img/logo_tuur.png" alt="LOGO" width= "100px" height = "auto">
                <div class="menu">
                <p>Home</p>
                <p>CSSSCRIPT.COM</p>
                <p>About Us</p>
            </div>
            <div class="menu__toggler"><span></span></div>
            </div>
            <div></div>
            <div class="nav">
            
                <!-- <ul class="navigatie">
                    <li class ="navItem">Home</li>
                    <li class ="navItem">About</li>
                    <li class ="navItem">Contact</li>
                </ul> -->
            </div>
        </header>

        <main>
            <div class='main-text'>

                <div class='play'>
                    JOKE.
                </div>
                <div class='text'>
                    <div class='text1'>
                        <!-- <p>Everyone can use a good laugh now and then.</p> -->
                        <p>Can't laugh at work?</br> Try our random joke generator!</p>
                    </div>
                    <div class='text2'>
                        <p class='number'>TRY IT</p>
                    </div>
                </div>
               
            </div>
            <div class='main-img'>
                <div class='colour-box'>
                    <div class="button"></div>
                </div>
                <div class='granny'>
                    <!-- <img src="/img/woman3.png" alt="LOGO" > -->
                </div>
            </div>
        
        </main>


        <script >
            const toggler = document.querySelector('.menu__toggler');
            const menu = document.querySelector('.menu');

            toggler.addEventListener('click', () => {
            toggler.classList.toggle('active');
            menu.classList.toggle('active');
            });
        </script>

    </body>
</html>