@extends('layouts.app')
@section('title')
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Back</a>
        <div class="card w-50 mt-2">
            <div class="card-body">
                <h2 class="card-title">{{$one_book['author']}}</h2>
                <h2 class="card-title">{{$one_book['name']}}</h2>
                <h2 class="card-title">{{$one_book['pages_count']}}</h2>
                <h2 class="card-title">{{$one_book['qt']}}</h2>
                <h2 class="card-title">Created At` {{$one_book['created_at']}}</h2>
                <a href="{{ route('books.edit', $one_book['id']) }}" class="btn btn-success">Edit</a>
                <form action="{{ route('books.destroy', $one_book['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
