@extends('layouts.master')

@section('title')
    Halaman Detail Cast
@endsection

@section('content')
    <h1>{{ $cast->name }}</h1>
    <h4>{{ $cast->age }}</h4>
    <p>{{ $cast->bio }}</p>

    <a href="/cast" class="btn btn-sm btn-warning">Back</a>
@endsection
