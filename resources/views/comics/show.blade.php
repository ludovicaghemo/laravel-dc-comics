@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>{{ $comic->title }}</h1>
        <img class="w-25" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

        <hr>
        <p>{{ $comic->description }}</p>

        <ul>
            <li>
                <strong>Series: </strong>
                {{ $comic->series }}
            </li>
            <li>
                <strong>Type: </strong>
                {{ $comic->type }}
            </li>
            <li>
                <strong>Price:</strong>
                {{ $comic->price }}
            </li>
            <li>
                <strong>Sale Date:</strong>
                {{ $comic->sale_date }}
            </li>
        </ul>
    </div>    
@endsection