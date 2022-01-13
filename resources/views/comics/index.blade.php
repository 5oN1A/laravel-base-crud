{{-- @dump($comics); --}}

@extends("layouts.default")

@section('page_title', 'Index')

@section('content')
    <div class="container">
      

        <a class="btn btn-secondary my-5" aria-current="page" href="{{ route('comics.create') }}">Add New Comic</a>

        <div class="row row-cols-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card mb-5" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="thumb comic #{{ $comic->thumb }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->series }}</p>
                        </div>

                        <div class="card-body text-center">
                            <a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}" class="card-link">Show</a>
                            <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}" class="card-link">Edit</a>
                            @include('partials.delete_btn')

                        </div>
                    </div>
                </div>


            @endforeach
        
    </div>


    </div>
@endsection
