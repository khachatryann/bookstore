@extends('layouts.app')
@section('title')
    Books
@endsection
@section('content')
    <x-nav-bar  />

    <div class="container">
        <a href="{{ route('books.create') }}" class="btn btn-primary mt-3">Create New Book List</a>
        @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        <h2 class="mt-2 "> <span style="color: #d4bee2">Books</span> List ( <span style="color: #7FFFD4">{{ count($books) }}</span> )</h2>

        @foreach($books as $book)
        <div class="card w-50 mt-3">
            <div class="card-body">
                <h2 class="card-title"> Author` <span style="color: #4682B4">{{ $book['author'] }}</span></h2>
                <h2 class="card-title">Book Name` <span style="color: #4682B4">{{ $book['name'] }}</span></h2>

                <a href="{{ route('books.show', $book) }}" class="btn btn-outline-info mt-3">All Info</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
