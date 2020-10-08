@extends('base')

@section('content')
    <h2>{{ $deck->name }}</h2>

    <button><a href="/deck/{{ $deck->id }}/edit">Modifier le deck</a></button>
    
    <button><a href="/deck/{{ $deck->id }}/delete">Supprimer le deck</a></button>
@endsection