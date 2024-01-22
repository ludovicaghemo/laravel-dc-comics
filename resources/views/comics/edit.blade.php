@extends('layouts.app')

@section('content')
    <div class="container my-5">

        {{-- Go back btn --}}
        <a class="btn btn-outline-secondary mb-5" href="{{ route('comics.index') }}">Go Back</a>

        <h2 class="text-center">Edit comic: {{ $comic->title }}</h2>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">

                {{-- Validation - error message --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            value="{{ old('title', $comic->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ old('thumb', $comic->thumb) }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series"
                            value="{{ old('series', $comic->series) }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date"
                            value="{{ old('sale_date', $comic->sale_date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                            value="{{ old('price', $comic->price) }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" class="form-select" name="type">
                            <option @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">graphic novel</option>
                            <option @selected(old('type', $comic->type) === 'comic book') value="comic book">comic book</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description', $comic->description) }}</textarea>
                    </div>

                    <button class="btn btn-outline-warning" type="submit">Save</button>

                </form>

            </div>
            {{-- /Col --}}
        </div>
        {{-- /Row --}}
    </div>
    {{-- /Container --}}
@endsection
