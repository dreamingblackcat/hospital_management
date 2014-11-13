@extends('layouts.master')
<!-- 
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop -->

@section('content')
    @foreach ($person as $people)
    <p>Name: {{ $people->name }}</p>
@endforeach

@stop