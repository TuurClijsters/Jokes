@extends('layout')

@section('content')

    <div>
        <h1></h1>
        <figure id="bridgeContainer">
            <canvas id="bridge" width="750" height="465">
    
            </canvas>
            <div class='grapcontainer'>
                <p class="grap">
                    @foreach ($joke as $grap)
                        {{ $grap->body }}
                    @endforeach
                </p>
            </div>
        </figure>
        <!-- <div id="bridge" width="750" height="465">
            <p class='midden'>
                @foreach ($joke as $grap)
                    {{ $grap->body }}
                @endforeach
            </p>
        </div> -->
        
        
    </div>

    <script src="/js/scratch.js"></script>
    
@endsection