@extends('layouts.master')

@section('title')
    Halaman Edit Film
@endsection

@section('content')
    <form method="POST" action="/film/{{ $film->id }}" enctype="multipart/form-data">

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
            <label>Genre</label>
            <select name="genre_id" id="" class="form-control">
                <option value="">--Select Genre--</option>
                @forelse ($genre as $item)
                    @if ($item->id == $film->genre_id)
                        <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                    @else
                        <option value="">{{ $item->name }}</option>
                    @endif
                @empty
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label>Title Film</label>
            <input type="text" name="title" value="{{ $film->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="number" name="year" value="{{ $film->year }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Summary</label>
            <textarea name="summary" id="" cols="30" rows="10" class="form-control">{{ $film->summary }}</textarea>
        </div>
        <div class="form-group">
            <label>Poster</label>
            <input type="file" name="poster" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
