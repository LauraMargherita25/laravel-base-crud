@extends('temeplates.base')

@section('pageTitle', 'DC Comics - HomePage')

@section('pageMain')
    <main>
        <h2>Sono la homepage di DC</h2>
        <a href="{{ route('comics.index') }}">Vedi tutti i comics</a>
    </main>
@endsection