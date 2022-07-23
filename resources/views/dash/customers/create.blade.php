@extends('layouts.app')
@section('title')
    New Customer
@endsection
@section('content')
    <div class="container">
        <a href="{{ route('customers.index') }}" class="btn btn-secondary mt-3">Back</a>

        <form action="{{ route('customers.store') }}" class="w-50" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Henry" id="name">
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth Date</label>
                <input type="date" class="form-control" name="birth_date" id="birth_date">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="example@mail.com" id="email">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Armenia/Yerevan" id="address">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="012345678" id="phone">
            </div>

            <div class="mb-3">
                <label for="passport_num" class="form-label">Passport Number</label>
                <input type="text" class="form-control" name="passport_num" placeholder="342424365" id="passport_num">
            </div>

            <button class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
