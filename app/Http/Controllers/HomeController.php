<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class HomeController 
{
    public function index()
    {
        $movies = Movie::latest()->get();

        return view('home', compact('movies'));
    }
}