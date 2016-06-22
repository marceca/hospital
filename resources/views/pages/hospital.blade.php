@extends('layout')

@section('title')
    Hospital Application
@stop

@section('content')

    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th>Name</th><th>Address</th><th>City</th><th>State</th>
            </tr>
        </thead>

        @foreach($userData as $user)
            <tr><td><a href="/hospital/{{ $user->id }}">{{ $user->name }}</a></td><td>{{ $user->address}}</td><td>{{ $user->city}}</td><td>{{ $user->state }}</td></tr>
        @endforeach
    </table>
@stop