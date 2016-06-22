@extends('layout')

@section('title')
Hospital Application
@stop

@section('content')

@foreach ($userData as $Data)
<div>
    <a href="/hospital/{{ $Data->id }}">{{ $Data->name }}</a>
</div>
@endforeach

@stop