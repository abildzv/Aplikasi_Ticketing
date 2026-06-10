<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CheckoutController extends Controller
{
    public function show($id)
    {
        $movie = Movie::findOrFail($id);

        $seats = session('selected_seats', []);  
        $total = session('total_price', 0); 

        return view('booking.checkout', compact('movie', 'seats', 'total'));
    }
}
