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

//show all Decks
Route::get('/deck', [ App\Http\Controllers\DeckController::class , 'index' ]);

//show create Deck form 
Route::get('/deck/create', [ App\Http\Controllers\DeckController::class , 'create' ]);

//store new Deck
Route::post('/deck', [ App\Http\Controllers\DeckController::class , 'store' ]);

//show edit Deck form, {deck} contain id
Route::get('/deck/{deck}/edit', [ App\Http\Controllers\DeckController::class , 'edit' ]);

//update existing Deck, {deck} contain id
Route::put('/deck/{deck}', [ App\Http\Controllers\DeckController::class , 'update' ]);

//show Deck, {deck} contain id
Route::get('/deck/{deck}', [ App\Http\Controllers\DeckController::class , 'show' ]);

//delete Deck, {deck} contain id
Route::delete('/deck/{deck}', [ App\Http\Controllers\DeckController::class , 'delete' ]);