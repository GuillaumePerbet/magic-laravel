@extends('base')

@section('content')
    <form method="POST" action="/deck">
    @csrf
        <label for="name">Nom du deck</label>
        <input type="text" name="name" id="name">

        <input type="submit" value="Créer">
    </form>
@endsection