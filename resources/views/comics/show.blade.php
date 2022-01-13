@extends("layouts.default")

@section('page_title', 'Comic #' . $comic->id)

@section('content')
    <main>
        <div class="container text-center my-5">
            <div class="d-flex align-items-center px-5">
                <div class="div">
                    <h1 class="mt-5">{{ $comic->title }}</h1>
                    <h2>Series: {{ $comic->series }}</h2>
                    <div class="px-5 mt-5">

                        <p class="text-start px-4">{{ $comic->description }} </p>
                        <p>Sale Date: {{ $comic->sale_date }}</p>
                        <p>Type: {{ $comic->type }}</p>
                        <hr>
                        <h3 class="mb-5">Price: {{ $comic->price }} &#128;</h3>
                        <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}" >Edit</a>
                        @include('partials.delete_btn')
                    </div>
                </div>
                <div>
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>


        </div>

        </div>

        </div>
    </main>
@endsection
