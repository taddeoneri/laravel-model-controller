@extends('layouts.app')

@section('content')
    <div class="container d-flex py-5 align-items-center flex-column">
        <h1>Lista titoli che puoi vedere</h1>
        <p>Premi per goderti tutti i titoli</p>
        <a href="{{ route('movies.index') }}">Vai</a>
    </div>
@endsection
