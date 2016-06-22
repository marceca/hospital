@extends('layout')

@section('content')
<h1>Edit Patient - {{ $userData->name }}</h1>

<form method="POST" action="/updateUser/{{ $userData->id }}">
    {{ method_field('PATCH') }}

    <h4>Edit Name: </h4><div class="form-group">
        <textarea name="name" class="form-control">{{ $userData->name }}</textarea>
    </div>
    <h4>Edit Address: </h4><div class="form-group">
        <textarea name="address" class="form-control">{{ $userData->address }}</textarea>
    </div>
    <h4>Edit City: </h4><div class="form-group">
        <textarea name="city" class="form-control">{{ $userData->city }}</textarea>
    </div>
    <h4>Edit State</h4><div class="form-group">
        <textarea name="state" class="form-control">{{ $userData->state }}</textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update Patient</button>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@stop