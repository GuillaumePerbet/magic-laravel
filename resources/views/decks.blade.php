@extends('base')

@section('content')
    @foreach ($decks as $deck)
        <h2><a href="{{ $deck->path() }}">{{ $deck->name }}</a></h2>
    @endforeach
@endsection