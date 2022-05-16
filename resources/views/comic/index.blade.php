@extends('temeplates.base')

@section('pageTitle', 'Comics')

@section('pageMain')
    <main>
        <h1> Comics </h1>

        <div class="container d-flex flex-wrap">
    
            @foreach ($comics as $comic)
            
                {{-- <h2><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></h2> --}}

                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $comic->series }}</h6>
                    <p class="card-text">{{ $comic->type }}</p>
                    <p class="card-text">{{ $comic->sale_date }}</p>
                    <p class="card-text">{{ $comic->price }}£</p>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary text-white">View Dettails</a>
                    </div>
                </div>
            
            @endforeach
                
        </div>
    </main>
@endsection

