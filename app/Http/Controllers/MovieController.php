<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Movie;

class MovieController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'poster' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $poster = null;

    if ($request->hasFile('poster')) {
        $poster = $request->file('poster')->store('movies', 'public');
    }

    Movie::create([
        'title' => $request->title,
        'description' => $request->description,
        'genre' => $request->genre,
        'duration' => $request->duration,
        'poster' => $poster,
        'release_date' => $request->release_date,
        'rating' => $request->rating,
    ]);

    return redirect('/manage-movies');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);

        $data = $request->all();

        if ($request->hasFile('poster')) {
            Storage::disk('public')->delete($movie->poster);
            $data['poster'] = $request->file('poster')->store('movies', 'public');
        }

        $movie->update($data);

        return redirect('/manage-movies')
            ->with('success', 'Movie berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);

    // hapus poster juga (biar tidak numpuk file)
    if ($movie->poster) {
        Storage::disk('public')->delete($movie->poster);
    }

    $movie->delete();

    return redirect('/manage-movies');
    }
}
