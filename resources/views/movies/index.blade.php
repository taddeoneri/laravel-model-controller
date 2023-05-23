@section('content')
    <section class="container">
        <h1>Home page</h1>
            @foreach ($movies as $movie)
                {{ $movie->title }}
            @endforeach
    </section>
@endsection
