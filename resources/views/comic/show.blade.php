@extends('temeplates.base')

@section('pageTitle', 'Home')

@section('showMain')
<main>
    <div>
        
        <h2>{{ $comic->title }}</h2>
        <h3>{{ $comic->series }}</h3>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
        
    </div>
</main>
@endsection