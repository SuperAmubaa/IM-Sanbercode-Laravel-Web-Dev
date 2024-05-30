<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use Illuminate\Support\Facades\File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = Film::get();

        return view('film.index', ['film' => $film]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genre = Genre::get();

        return view('film.create', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'year' => 'required',
            'poster' => 'required|mimes:jpg,png',
            'genre_id' => 'required',
        ]);

        $posterName = time() . '.' . $request->poster->extension();

        $request->poster->move(public_path('image'), $posterName);

        $film = new Film;

        $film->title = $request->input('title');
        $film->summary = $request->input('summary');
        $film->year = $request->input('year');
        $film->poster = $posterName;
        $film->genre_id = $request->input('genre_id');

        $film->save();


        return redirect('/film');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $film = Film::find($id);
        return view('film.detail', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $film = Film::find($id);
        $genre = Genre::get();

        return view('film.edit', ['film' => $film, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'year' => 'required',
            'poster' => 'required|mimes:jpg,png',
            'genre_id' => 'required',
        ]);

        $film = Film::find($id);

        if ($request->has('poster')) {

            $path = 'image/';
            File::delete($path . $film->poster);

            $posterName = time() . '.' . $request->poster->extension();

            $request->poster->move(public_path('image'), $posterName);

            $film->poster = $posterName;
        }

        $film->title = $request->input('title');
        $film->summary = $request->input('summary');
        $film->year = $request->input('year');
        $film->genre_id = $request->input('genre_id');

        $film->save();
        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $film = Film::find($id);

        if ($film) {
            $path = public_path('image/');

            if ($film->poster && File::exists($path . $film->poster)) {

                File::delete($path . $film->poster);
            }

            $film->delete();

            return redirect('/film')->with('success', 'Film berhasil dihapus.');
        } else {

            return redirect('/film')->with('error', 'Film tidak ditemukan.');
        }
    }
}
