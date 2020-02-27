@extends('layout')

@section('content')

    <div class="main">
        <div class='main-text'>

            <div class='play'>
                @if (Auth::check())
                    Hey, {{ Auth::user()->name}}
                @else
                    JOKE
                @endif
            </div>
            <div class='text'>
                <div class='text1'>
                    <!-- <p>Everyone can use a good laugh now and then.</p> -->
                    <p>Can't laugh at work?</br> Generate a random joke!</p>
                </div>
                <div class='text2'>
                    <p class='number'>TRY IT</p>
                </div>
            </div>
            
        </div>
        <div class='main-img'>
            <div class='colour-box'>
                <a href="/play2"><div class="button"></div></a>
            </div>
            <div class='granny'>
                <!-- <img src="/img/woman3.png" alt="LOGO" > -->
            </div>
        </div>
    
</div>
@endsection