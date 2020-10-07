<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

// show all Decks
Route::get('/decks', [ App\Http\Controllers\DeckController::class , 'showAll' ]);

// show Deck matching {id}
Route::get('/deck/{id}', [ App\Http\Controllers\DeckController::class , 'show' ]);

// create Deck with {name} 
Route::get('/create/{name}', [ App\Http\Controllers\DeckController::class , 'create' ]);