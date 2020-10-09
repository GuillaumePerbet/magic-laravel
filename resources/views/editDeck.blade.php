@extends('base')

@section('content')
    <form method="POST" action="{{ $deck->path() }}">
        @csrf
        @method('PUT')
        
        <label for="name">Nom du deck</label>
        <input type="text" name="name" id="name" value="{{ $deck->name }}">
        @error('name')
            <p>{{ $errors->first('name') }}</p>
        @enderror

        <input type="submit" value="Modifier">
    </form>
@endsection