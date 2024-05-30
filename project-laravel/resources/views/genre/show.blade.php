@extends('layouts.master')

@section('title')
    Halaman Detail Genre
@endsection

@section('content')
    <h1>{{ $genre->name }}</h1>

    <a href="/genre" class="btn btn-sm btn-warning">Back</a>
@endsection
