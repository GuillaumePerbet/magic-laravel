@extends('base')

@section('content')
    @foreach ($decks as $deck)
        <h2>{{ $deck->name }}</h2>
    @endforeach
@endsection