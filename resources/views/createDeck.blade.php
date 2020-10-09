@extends('base')

@section('content')
    <form method="POST" action="/deck">
    @csrf
        <label for="name">Nom du deck</label>
        <input type="text" name="name" id="name">
        @error('name')
            <p>{{ $errors->first('name') }}</p>
        @enderror

        <input type="submit" value="Créer">
    </form>
@endsection