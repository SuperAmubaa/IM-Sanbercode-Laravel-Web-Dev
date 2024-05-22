@extends('layouts.master')

@section('title')
    Halaman Register
@endsection

@section('content')
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/home" method="POST">
        @csrf
        <label>First Name</label> <br />
        <input type="text" name="fname" /> <br />
        <br />
        <label>Last Name</label> <br />
        <input type="text" name="lname" /> <br />
        <br />
        <label>Gender</label> <br />
        <input type="radio" value="1" name="gender" /> Male <br />
        <input type="radio" value="2" name="gender" /> Female <br />
        <input type="radio" value="3" name="gender" /> Other <br />
        <br />
        <label>Nationality</label>

        <select name="nationality" id="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="arab">Saudi Arabia</option>
            <option value="singapore">Singapore</option>
            <option value="germany">Germany</option>
        </select>
        <br />
        <br />
        <label>Language Spoken :</label> <br />
        <input type="checkbox" value="1" name="language" /> Bahasa Indonesia <br />
        <input type="checkbox" value="2" name="language" /> English <br />
        <input type="checkbox" value="3" name="language" /> Other <br />
        <br />
        <label>Biodata</label> <br />
        <textarea name="bio" id="" cols="30" rows="10"></textarea><br />
        <br />

        <input type="submit" value="Submit">
    </form>
@endsection
