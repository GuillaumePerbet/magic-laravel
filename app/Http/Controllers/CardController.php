<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Card;

class CardController extends Controller
{

    public function search( ){

        //get card search name
        $name=request('name');
        
        //fetch in magic API
        $cards = Http::get("https://api.magicthegathering.io/v1/cards?name=$name&contains=imageUrl")->json()["cards"];
        
        //store cards
        foreach ($cards as $card) {
            $this->store( ['name'=>$card['name'] , 'id'=>$card['id'] ,'imageUrl'=>$card['imageUrl'] ]);
        }

        //redirect to Card index by name
        return redirect("/card/$name");
    }

    public function indexByName( $name ){

        //get Cards matching name
        $cards = Card::where('name','like',"%$name%")->get();

        //return to cards view
        return view('cards',['cards'=>$cards]);
    }

    protected function store( $array ){

        Card::firstOrCreate( $array );
    }
}
