@extends('layouts.master')

@section('title')
    Detail Film
@endsection


@section('content')
    <img src="{{ asset('image/' . $film->poster) }}" width="250px" height="350px" alt="poster">
    <h5 class="text-bold my-2">{{ $film->title }} <span>({{ $film->year }})</span> </h5>
    <p class="badge badge-info">{{ $film->genre->name }}</p>
    <p>{{ $film->summary }}</p>

    <hr>
    <h4>List Komentar</h4>

    @forelse ($film->listComment as $item)
        <div class="card">
            <h5 class="card-header bg-info">{{ $item->creator->name }}</h5>
            <div class="card-body">
                <p class="card-text">{{ $item->content }}</p>
            </div>
        </div>
    @empty
        <h4>Comment is Empty</h4>
    @endforelse



    <h4>Tambah Komentar</h4>
    <form method="POST" action="/comments/{{ $film->id }}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="form-group">
            <textarea name="content" id="" cols="30" rows="10" placeholder="add comment" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Stars</label>
            <input type="number" name="point" class="form-control">
        </div>
        <button type="submit" class="btn btn-sm btn-primary my-2">Submit</button>
    </form>

    <a href="/film" class="btn btn-sm btn-warning">Back</a>
@endsection
