<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = DB::table('cast')->get();
        return view('cast.home', ['cast' => $cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6',
            'age' => 'required',
            'bio' => 'required',
        ]);

        DB::table('cast')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' => $request->input('bio'),
        ]);

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = DB::table('cast')->find($id);

        return view('cast.show', ['cast' => $cast]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = DB::table('cast')->find($id);

        return view('cast.edit', ['cast' => $cast]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:6',
            'age' => 'required',
            'bio' => 'required',
        ]);
        DB::table('cast')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'age' => $request->input('age'),
                    'bio' => $request->input('bio'),
                ]
            );
        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cast')->where('id', '=', $id)->delete();


        return redirect('/cast');
    }
}
