@extends('layouts.app')
@section('title')
    Roles List
@endsection
@section('content')
    <x-nav-bar />

{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-8">--}}
{{--                <table class="table">--}}
{{--                    <thead>--}}
{{--                        <tr class="table-info">--}}
{{--                            <th scope="col">Role Name</th>--}}
{{--                            <th scope="col">Role ID</th>--}}
{{--                            <th scope="col">Name</th>--}}
{{--                            <th scope="col">Options</th>--}}
{{--                        </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                       @foreach($roles as $role)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $role['Role'] }}</td>--}}
{{--                            <td>{{ $role['Role_id'] }}</td>--}}
{{--                            <td>{{ $role['Name'] }}</td>--}}
{{--                            <td>--}}
{{--                                <a href="">More</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                       @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--            <div class="col-md-4"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
