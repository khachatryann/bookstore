@extends('layouts.app')
@section('title')
    Customers
@endsection
@section('content')
    <x-nav-bar  />

    <div class="container">
        <a href="{{ route('customers.create') }}" class="btn btn-primary mt-3">Create New Customer</a>
        @if(session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        <h2 class="mt-2"><span style="color: #d4bee2">Customers</span> ( <span style="color: #7FFFD4">{{ count($customers) }}</span> )</h2>

        @foreach($customers as $customer)
            <div class="card w-50 mt-3">
                <div class="card-body">
                    <h2 class="card-title"> Name` <span style="color: #4682B4">{{ $customer['name'] }}</span></h2>
                    <h2 class="card-title">Email` <span style="color: #4682B4">{{ $customer['email'] }}</span></h2>

                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-outline-info mt-3">Info</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection


