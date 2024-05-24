@extends('layouts.master')

@section('title')
    Halaman Cast
@endsection


@section('content')
    <a href="/cast/create" class="btn btn-sm btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Bio</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->bio }}</td>
                    <td>

                        <form method="post" action="/cast/{{ $item->id }}">
                            @csrf
                            @method('delete')
                            <a href="/cast/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="/cast/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>

                </tr>
            @empty
            @endforelse


        </tbody>
    </table>
@endsection
