<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joke;

class JokesController extends Controller
{
    public function index(){
        // Render a list 
        // $jokes =Joke::latest()->get();
        $joke = Joke::all()->random(1);

        return view ('play',['joke' => $joke]);
    }

    // public function show(Joke $joke){
    //     return view ('jokes.show',['joke' => $joke]);
    // }

    
    // public function create(){
    //     return view ('articles.create');
    // }
}
