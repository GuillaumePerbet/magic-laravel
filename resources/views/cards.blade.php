@extends('base')

@section('content')
    @foreach($cards as $card)
        <img src="{{ $card->imageUrl }}" alt="">
    @endforeach
@endsection