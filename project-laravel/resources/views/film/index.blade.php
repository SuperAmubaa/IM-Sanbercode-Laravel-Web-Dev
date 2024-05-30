@extends('layouts.master')

@section('title')
    Halaman Film
@endsection


@section('content')
    <a href="/film/create" class="btn btn-sm btn-primary my-3">Tambah</a>

    <div class="row">
        @forelse ($film as $item)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('image/' . $item->poster) }}" class="card-img-top" width="150px" height="350px"
                        alt="poster">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }} </h5>
                        <p class="card-text">{{ $item->year }}</p>
                        <p class="card-text">{{ Str::limit($item->summary, 100) }}.</p>
                        <a href="/film/{{ $item->id }}" class="btn btn-primary btn-sm">Detail</a>
                        <a href="/film/{{ $item->id }}/edit" class="btn btn-info btn-sm">Edit</a>
                        <form method="post" action="/film/{{ $item->id }}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </div>
                </div>
            </div>



        @empty
        @endforelse
    </div>
@endsection
