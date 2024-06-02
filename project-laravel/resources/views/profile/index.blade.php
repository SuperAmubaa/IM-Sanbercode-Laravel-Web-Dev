@extends('layouts.master')

@section('title')
    Halaman Edit Cast
@endsection

@section('content')
    <form method="POST" action="/profile/{{ $profile->id }}">

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
            <label>Name User</label>
            <input type="text" value="{{ $profile->users->name }}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Email User</label>
            <input type="text" value="{{ $profile->users->email }}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="text" value="{{ $profile->age }}" name="age" class="form-control">
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" cols="30" rows="10">{{ $profile->bio }}</textarea>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control" cols="30" rows="10">{{ $profile->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
