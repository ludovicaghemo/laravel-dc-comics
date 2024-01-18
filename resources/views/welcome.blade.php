@extends('layouts.app')

@section('content')

    <div class="container my-5">
        <h1>Welcome to your admin panel</h1>
        <a class="btn btn-outline-secondary my-5" aria-current="page" href="{{ route('comics.index') }}">GO TO THE COMICS LIST</a>
    </div>
    
@endsection
