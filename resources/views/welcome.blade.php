@extends("layouts.app")
@section("title")
    home
@endsection
@section("content")
    <div class="container">
        <h1>Welcome</h1>
        <p><a href="{{ route('register_view') }}" class="btn btn-success">Go to Register page</a></p>
        <p><a href="{{ route('login_view') }}" class="btn btn-info">Go to Login page</a></p>
    </div>
@endsection
