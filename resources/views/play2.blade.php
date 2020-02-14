@extends('layout')

@section('content')

    <div class="main3">
        <div class="leftmain">
            <h1>REVEAL ME!</h1>
            <h2>Wipe the panel to see the joke.</h2>
            <a href="/play2"><div class="button2">Another one!</div></a>
        </div>

        <div class="rightmain">
            <figure id="bridgeContainer" class="item-a">
                <canvas id="bridge" width="auto" height="auto">
        
                </canvas>
                <div class='grapcontainer'>
                    <p class="grap">
                        @foreach ($joke as $grap)
                            {{ $grap->body }}
                        @endforeach
                    </p>
                </div>
                
            </figure>
        </div>
        
    </div>

    <script src="/js/scratch.js"></script>
    
@endsection