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

// call 'showAll' method from DeckController
Route::get('/decks', [ App\Http\Controllers\DeckController::class , 'showAll' ]);

// GET {deck_id} param and call 'showDeck' method from DeckController
Route::get('/deck/{deck_id}', [ App\Http\Controllers\DeckController::class , 'showDeck' ]);