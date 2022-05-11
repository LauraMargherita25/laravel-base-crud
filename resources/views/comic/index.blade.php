@extends('temeplates.base')

@section('pageTitle', 'Comic')

@section('pageMain')
    <main>
        <h1> Comics </h1>
        @foreach ($comics as $comic)
        
            <h2>{{ $comic->title }}</h2>
        
        @endforeach
    </main>
@endsection

