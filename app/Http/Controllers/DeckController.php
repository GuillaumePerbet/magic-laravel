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

    public function showDeck( $deck_id ){

        //select deck matching $deck_id
        $deck = Deck::where( 'id' , $deck_id )->first();

        //return deck view
        return view( 'deck' , [ 'deck' => $deck ] );
    }

    public function create(){

        //create new deck with cards field empty { 'cards': [] }
        $deck = new Deck;
        $deck->cards = json_encode([ 'cards' => [] ]);
        $deck->save();
    }
}
