@extends('layouts.app')
@section('title')
    New List
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back</a>

            <form action="{{ route('books.store') }}" class="w-50" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Book Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Charlotte Bronte" id="name">
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" name="author" placeholder="Jane Eyre" id="author">
                </div>

                <div class="mb-3">
                    <label for="pages_count" class="form-label">Pages Count</label>
                    <input type="number" min="1" class="form-control" name="pages_count" placeholder="80" id="pages_count">
                </div>

                <div class="mb-3">
                    <label for="qt" class="form-label">Quantity</label>
                    <input type="number" min="1" class="form-control" name="qt" placeholder="1" id="qt">
                </div>

                <button class="btn btn-primary">Save</button>
            </form>
    </div>
@endsection
