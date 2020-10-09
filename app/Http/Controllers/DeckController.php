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

    public function show( Deck $deck ){

        //return deck view
        return view( 'deck' , [ 'deck'=>$deck ] );
    }

    public function create(){

        //return createDeck form view
        return view( 'createDeck' );
    }

    public function store(){

        //validate name
        request()->validate([
            'name' => 'required'
        ]);
                
        //insert new Deck with name parameter
        $deck = new Deck;
        $deck->name = request( 'name' );
        $deck->save();

        //redirect to decks view
        return redirect( '/deck' );
    }

    public function edit( Deck $deck ){

        //return editDeck form view
        return view( 'editDeck' , [ 'deck'=>$deck ]);
    }

    public function update( Deck $deck ){

        //validate name
        request()->validate([
            'name' => 'required'
        ]);

        //update Deck values
        $deck->name = request('name');

        //update Deck
        $deck->save();

        //redirect to updated Deck view
        return redirect( "/deck/$deck->id" );
    }

    public function delete( Deck $deck ){
        
        //delete Deck matching $id
        $deck->delete();

        //redirect to Decks index view
        return redirect( '/deck' );
    }
}