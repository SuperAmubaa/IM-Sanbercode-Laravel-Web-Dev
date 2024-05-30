@extends('layouts.master')

@section('title')
    Detail Film
@endsection


@section('content')
    <img src="{{ asset('image/' . $film->poster) }}" width="250px" height="350px" alt="poster">
    <h5 class="text-bold my-2">{{ $film->title }} </h5>
    <p>{{ $film->year }}</p>
    <p>{{ $film->summary }}</p>
    <a href="/film" class="btn btn-sm btn-warning">Back</a>
@endsection
