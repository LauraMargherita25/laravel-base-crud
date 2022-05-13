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
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>

        <a href="{{ route('comics.edit', $comic->id ) }}" class="btn btn-primary">Edit this comic</a>

        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
</main>
@endsection