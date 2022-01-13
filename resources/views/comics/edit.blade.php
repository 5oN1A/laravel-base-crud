@extends("layouts.default")

@section('page_title', 'Create')

@section('content')
    <div class="container">
        <h1>New Comic details:</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="field_title" class="form-label">Title</label>
                <input type="text" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value='{{ old("title") ?? $comic->title }}' name="title"
                    id="field_title">

                @if ($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->get('title')[0] }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_description" class="form-label">Description</label>
                <input type="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" value='{{ old("description") ?? $comic->description }}'
                    name="description" id="field_description">

                @if ($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->get('description')[0] }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_thumb" class="form-label">Img URL</label>
                <input type="thumb" class="form-control {{ $errors->has('thumb') ? 'is-invalid' : '' }}" name="thumb" value='{{ old("thumb") ?? $comic->thumb }}'
                    id="field_thumb">

                @if ($errors->has('thumb'))
                    <div class="invalid-feedback">
                        {{ $errors->get('thumb')[0] }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_price" class="form-label">Price</label>
                <input type="price" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" name="price" value='{{ old("price") ?? $comic->price }}'
                    id="field_price">

                @if ($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->get('price')[0] }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_series" class="form-label">Series</label>
                <input type="series" class="form-control {{ $errors->has('series') ? 'is-invalid' : '' }}" name="series" value='{{ old("series") ?? $comic->series }}'
                    id="field_series">

                @if ($errors->has('series'))
                    <div class="invalid-feedback">
                        {{ $errors->get('series')[0] }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_sale_date" class="form-label">Sale Date</label>
                <input type="sale_date" class="form-control {{ $errors->has('sale_date') ? 'is-invalid' : '' }}"
                    name="sale_date" value='{{ old("sale_date") ?? $comic->sale_date }}' id="field_sale_date">

                @if ($errors->has('sale_date'))
                    <div class="invalid-feedback">
                        {{ $errors->get('sale_date')[0] }}
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="field_type" class="form-label">Type</label>
                <input type="type" class="form-control" name="type" value='{{ old("type") ?? $comic->type }}' id="field_type">


            </div>



            <div>
                <button class="btn btn-secondary" type="reset ">Reset</button>
                <button class="btn btn-success" type="submit">Modify</button>
            </div>

        </form>

    </div>
@endsection
