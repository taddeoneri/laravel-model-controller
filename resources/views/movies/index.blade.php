@extends('layouts.app')

@section('content')
    <section class="container text-center">
        <h1 class="py-4">Lista dei migliori film</h1>
            <div class="d-flex justify-content-between flex-wrap">
                @foreach ($movies as $movie)
                    <div class="card my-5">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->date }}</p>
                        <p class="card-text">{{ $movie->vote }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
@endsection
