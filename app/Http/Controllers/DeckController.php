<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deck;

class DeckController extends Controller
{

    public function index(){
        
        //select all decks
        $decks = Deck::all();

        //return decks view
        return view( 'decks' , [ 'decks' => $decks ] );
    }

    public function show( $id ){

        //select deck matching $id
        $deck = Deck::find($id);

        //return deck view
        return view( 'deck' , [ 'deck' => $deck ] );
    }

    public function create( ){
        //return create form view
        return view( 'form' );
    }

    public function store(){
                
        //insert new Deck with name parameter
        $deck = new Deck;
        $deck->name = request('name');
        $deck->save();

        //redirect to Decks index
        return redirect('/deck');
    }

}
