@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center my-5">HERE IS THE COMICS LIST</h1>

        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif

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
                            <a class="btn btn-outline-secondary" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                                <i class="fa-solid fa-info"></i>
                            </a>
                            <a class="btn btn-outline-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                                <i class="fa-solid fa-pencil"></i>
                            </a>

                            <form class="d-inline-block" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                
                                <button class="btn btn-outline-danger" type="submit" onclick="return confirm('{{ __('Are you sure you want to delete this item?') }}')">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end my-5">
            <a class="btn btn-outline-secondary" href="{{ route('comics.create') }}">Add a new comic</a>
        </div>
    </div>
@endsection
