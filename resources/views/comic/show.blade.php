@extends('temeplates.base')

@section('pageTitle', 'Comic')

@section('pageMain')
<main>
    <div>
        
        <img src="{{ $comic->thumb }}" alt="">
        <h2>{{ $comic->title }}</h2>
        <h3>{{ $comic->series }}</h3>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
        
    </div>
</main>
@endsection