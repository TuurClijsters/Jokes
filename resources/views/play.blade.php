@extends('layout')

@section('content')

    <div class="main2">
        <div></div>
        <div>
            <h1>REVEAL ME!</h1>
            <p>Wipe the chalkboard to see the joke.</p>
        </div>
        <div>
           
        </div>
        <div></div>
        <div></div>
        <div class="woman item-b">
        </div>
        <div>
        <div class='button2container'>
                <a href="/play"><div class="button2">Another one!</div></a>
            </div>
        </div>
        <figure id="bridgeContainer" class="item-a">
            <canvas id="bridge" width="auto" height="auto">
    
            </canvas>
            <div class='grapcontainer'>
            <div class="man"></div>
                <p class="grap">
                    @foreach ($joke as $grap)
                        {{ $grap->body }}
                    @endforeach
                </p>
            </div>
            
        </figure>
        
    </div>

    <script src="/js/scratch.js"></script>
    
@endsection