@extends('layouts.master')

@section('title')
    Halaman Edit Cast
@endsection

@section('content')
    <form method="POST" action="/cast/{{ $cast->id }}">

        @method('put')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @csrf
        <div class="form-group">
            <label>Name Cast</label>
            <input type="text" value="{{ $cast->name }}" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Age Cast</label>
            <input type="int" name="age" value="{{ $cast->age }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" cols="30" rows="10">{{ $cast->bio }}"</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
