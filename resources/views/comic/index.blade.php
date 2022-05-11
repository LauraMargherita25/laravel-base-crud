@extends('temeplates.base')

@section('pageTitle', 'Comics')

@section('pageMain')
    <main>
        <h1> Comics </h1>
        @foreach ($comics as $comic)
        
            <h2><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2>
        
        @endforeach
    </main>
@endsection

