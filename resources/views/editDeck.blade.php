@extends('base')

@section('content')
    <form method="PUT" action="/deck/{{ $deck->id }}">
    @csrf
        <label for="name">Nom du deck</label>
        <input type="text" name="name" id="name" value="{{ $deck->name }}">

        <input type="submit" value="Modifier">
    </form>
@endsection