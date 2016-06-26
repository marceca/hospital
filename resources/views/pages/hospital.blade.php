@extends('layouts.app')

@section('title')
    Hospital Application
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>Name</th><th>Address</th><th>City</th><th>State</th>
                        </tr>
                        </thead>

                        @foreach($userData as $user)
                        <tbody>
                        <tr><td><a href="/hospital/{{ $user->id }}">{{ $user->name }}</a></td><td>{{ $user->address}}</td><td>{{ $user->city}}</td><td>{{ $user->state }}</td></tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop