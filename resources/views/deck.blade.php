@extends('base')

@section('content')
    <h2>{{ $deck->name }}</h2>

    <p><a href="/deck/{{ $deck->id }}/edit">Modifier le deck</a></p>
@endsection