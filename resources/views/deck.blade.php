@extends('base')

@section('content')
    <h2>{{ $deck->name }}</h2>

    <button><a href="{{ $deck->path() }}/edit">Modifier le deck</a></button>
    
    <form action="{{ $deck->path() }}" method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Supprimer le deck">
    </form>
@endsection