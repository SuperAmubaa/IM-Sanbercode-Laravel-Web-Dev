@extends('layouts.master')

@section('title')
    Halaman Edit Cast
@endsection

@section('content')
    <form method="POST" action="/genre/{{ $genre->id }}">

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
            <input type="text" value="{{ $genre->name }}" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
