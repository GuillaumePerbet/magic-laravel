@extends('base')

@section('content')
    <h2>{{ $deck->name }}</h2>

    <button><a href="/deck/{{ $deck->id }}/edit">Modifier le deck</a></button>
    
    <form action="/deck/{{ $deck->id }}" method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Supprimer le deck">
    </form>
@endsection