{{-- @dump($comics); --}}

@extends("layouts.default")

@section('page_title', 'Index')

@section('content')
    <div class="container">
        <h1 class="mb-5">Lista comics</h1>

        {{-- <a class="btn btn-link" href="{{ route('users.create') }}">Aggiungi...</a> --}}
        <div class="list-group">
            @foreach ($comics as $comic)
                <a href="{{ route('comics.show', $comic->id) }}" class="list-group-item list-group-item-action"
                    aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $comic->title }}</h5>
                        <small>{{ $comic->price }} &#128;</small>
                    </div>
                    <p class="mb-1">{{ $comic->series }}</p>
                    <small>{{ $comic->type }}</small>
                </a>
            @endforeach

        </div>

       
    </div>
@endsection
