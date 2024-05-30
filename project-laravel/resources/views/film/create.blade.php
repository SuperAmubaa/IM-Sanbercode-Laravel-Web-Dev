@extends('layouts.master')

@section('title')
    Halaman Create Film
@endsection

@section('content')
    <form method="POST" action="/film" enctype="multipart/form-data">
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
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @empty
                    <option value="">{{ $item->name }}</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            <label>Title Film</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Year</label>
            <input type="number" name="year" class="form-control">
        </div>
        <div class="form-group">
            <label>Summary</label>
            <textarea name="summary" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Poster</label>
            <input type="file" name="poster" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
