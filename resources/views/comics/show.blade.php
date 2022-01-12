@extends("layouts.default")

@section('page_title', 'Comic #' . $comic->id)

@section('content')
    <main>
        <div class="container text-center">
            <h1 class="mt-5">{{ $comic->title }}</h1>
            <h2>Series: {{ $comic->series }}</h2>
            <div class="d-flex mt-5">
                <div class=" me-5">
                    <p>{{ $comic->description }} </p>
                    <p>Sale Date: {{ $comic->sale_date }}</p>
                    <p>Type: {{ $comic->type }}</p>
                </div>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>


            <hr>
            <h3>Price: {{ $comic->price }} &#128;</h3>
        </div>
    </main>
@endsection
