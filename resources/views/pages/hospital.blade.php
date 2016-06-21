@extends('layout')

@section('title')
    Hospital Applitcation
@stop

@section('content')
        @foreach($people as $person)
            {{ $person }}
        @endforeach
@stop