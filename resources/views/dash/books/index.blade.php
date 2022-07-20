@extends('layouts.app')
@section('title')
    Books
@endsection
@section('content')
    <x-nav-bar  />

    <div class="container">
        <a href="{{ route('books.create') }}" class="btn btn-primary mt-3">Create New Book List</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h2>Books List ( {{ count($books) }} )</h2>

        @foreach($books as $book)
        <div class="card w-50">
            <div class="card-body">
                <h2 class="card-title"> Author` {{ $book['author'] }}</h2>
                <h2 class="card-title">Book Name` {{ $book['name'] }}</h2>

                <a href="{{ route('books.show', $book) }}">Options</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
