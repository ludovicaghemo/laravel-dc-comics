@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="text-center">Add a new comic</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" class="form-select" name="type">
                            <option selected value="">Select</option>
                            <option value="graphic_novel">Comic Book</option>
                            <option value="cortissima">Graphic Novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                    </div>

                    <button class="btn btn-outline-secondary" type="submit">Save</button>

                </form>
            </div>
        </div>
    </div>
@endsection
