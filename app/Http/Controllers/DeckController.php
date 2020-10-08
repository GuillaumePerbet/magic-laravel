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
        $deck = Deck::find( $id );

        //return deck view
        return view( 'deck' , [ 'deck'=>$deck ] );
    }

    public function create(){

        //return createDeck form view
        return view( 'createDeck' );
    }

    public function store(){
                
        //insert new Deck with name parameter
        $deck = new Deck;
        $deck->name = request( 'name' );
        $deck->save();

        //redirect to decks view
        return redirect( '/deck' );
    }

    public function edit( $id ){

        //select Deck matching $id
        $deck = Deck::find( $id );

        //return editDeck form view
        return view( 'editDeck' , [ 'deck'=>$deck ]);
    }

    public function update( $id ){

        //select Deck matching $id
        $deck = Deck::find( $id );

        //update Deck values
        $deck->name = request('name');

        //update Deck
        $deck->save();

        //redirect to updated Deck view
        return redirect( '/deck/$id' );
    }

    public function delete( $id ){
        
        //delete Deck matching $id
        Deck::destroy($id);

        //redirect to Decks index view
        return redirect( '/deck' );
    }
}