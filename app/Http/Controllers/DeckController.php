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

        //create Deck
        Deck::create($this->validateDeck());

        //redirect to Deck index view
        return redirect( '/deck' );
    }

    public function edit( Deck $deck ){

        //return editDeck form view
        return view( 'editDeck' , [ 'deck'=>$deck ]);
    }

    public function update( Deck $deck ){

        //update Deck
        $deck->update($this->validateDeck());

        //redirect to updated Deck view
        return redirect( "/deck/$deck->id" );
    }

    public function delete( Deck $deck ){
        
        //delete $deck
        $deck->delete();

        //redirect to Deck index view
        return redirect( '/deck' );
    }

    protected function validateDeck(){

        //validate request values
        return request()->validate([
            'name' => 'required'
        ]);
    }
}