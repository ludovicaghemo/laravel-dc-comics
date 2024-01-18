@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>HERE IS THE COMICS LIST</h1>

        <table class="table table-striped my-4">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Series</th>
                    <th scope="col">Type</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-outline-secondary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end">
            <a class="btn btn-outline-secondary" href="{{ route('comics.create') }}">Add a new comic</a>
        </div>
    </div>
@endsection
