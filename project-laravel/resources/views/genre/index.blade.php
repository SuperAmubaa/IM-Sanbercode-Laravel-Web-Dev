@extends('layouts.master')

@section('title')
    Halaman Genre
@endsection


@section('content')
    <a href="/genre/create" class="btn btn-sm btn-primary">Tambah</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genre as $key => $item)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>

                        <form method="post" action="/genre/{{ $item->id }}">
                            @csrf
                            @method('delete')
                            <a href="/genre/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                            <a href="/genre/{{ $item->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>

                </tr>
            @empty
            @endforelse

        </tbody>
    </table>
@endsection
