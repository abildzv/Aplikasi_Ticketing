<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class ManageMoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::latest()->get();

        return view('dashboard.manage-movies', compact('movies'));
    }
}