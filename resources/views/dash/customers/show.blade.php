@extends('layouts.app')
@section('title') {{ $one_customer['name'] }}
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('customers.index') }}" class="btn btn-secondary mt-3">Back</a>
        <div class="card w-50 mt-2">
            <div class="card-body">
                <h2 class="card-title">Name` <span style="color: #4682B4">{{ $one_customer['name'] }}</span></h2>
                <h2 class="card-title">Birth Date` <span style="color: #4682B4">{{ $one_customer['birth_date'] }}</span></h2>
                <h2 class="card-title">Email` <span style="color: #4682B4">{{ $one_customer['email'] }}</span></h2>
                <h2 class="card-title">Address` <span style="color: #4682B4">{{ $one_customer['address'] }}</span> </h2>
                <h2 class="card-title">Phone` <span style="color: #4682B4">{{ $one_customer['phone'] }}</span></h2>
                <h2 class="card-title">Passport_Num` <span style="color: #4682B4">{{ $one_customer['passport_num'] }}</span></h2>
                <h2 class="card-title">Created At` <span style="color: #4682B4">{{ $one_customer['created_at'] }}</span></h2>

                <a href="{{ route('customers.edit', $one_customer['id']) }}" class="btn btn-success">Edit</a>

                <form action="{{ route('customers.destroy', $one_customer['id']) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
