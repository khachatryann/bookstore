@extends('layouts.app')
@section('title')
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back</a>
        <div class="card w-50 mt-2">
            <div class="card-body">
                <h2 class="card-title">Author` <span style="color: #4682B4">{{ $one_book['author'] }}</span></h2>
                <h2 class="card-title">Name` <span style="color: #4682B4">{{ $one_book['name'] }}</span> </h2>
                <h2 class="card-title">Pages Count` <span style="color: #4682B4">{{ $one_book['pages_count'] }}</span></h2>
                <h2 class="card-title">Quantity` <span style="color: #4682B4">{{ $one_book['qt'] }}</span></h2>
                <h2 class="card-title">Created At` <span style="color: #4682B4">{{ $one_book['created_at'] }}</span></h2>

                <a href="{{ route('books.edit', $one_book['id']) }}" class="btn btn-success">Edit</a>

                <form action="{{ route('books.destroy', $one_book['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
