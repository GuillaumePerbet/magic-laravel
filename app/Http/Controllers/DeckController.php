<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Deck;

class DeckController extends Controller
{

    public function showAll(){
        
        //select all decks
        $decks = Deck::all();

        //return decks view
        return view( 'decks' , [ 'decks' => $decks ] );
    }

    public function show( $id ){

        //select deck matching $id
        $deck = Deck::where( 'id' , $id )->first();

        //return deck view
        return view( 'deck' , [ 'deck' => $deck ] );
    }

    public function create( $name ){
                
        //insert new deck with $name parameter
        $deck = new Deck;
        $deck->name = $name;
        $deck->save();
    }

}
