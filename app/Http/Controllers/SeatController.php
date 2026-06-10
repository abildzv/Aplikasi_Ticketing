<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class SeatController extends Controller
{
    // tampilkan halaman select seat
    public function index($id)
    {
        $movie = Movie::findOrFail($id);

        return view('booking.select-seat', compact('movie'));
    }

    // simpan seat
    public function store(Request $request, $movieId)
{
    $request->validate([
        'seats' => 'required|array|min:1',
    ]);

    $priceMap = [
        'A' => 35000,
        'B' => 35000,
        'C' => 50000,
        'D' => 50000,
        'E' => 100000,
    ];

    $seats = $request->seats; // contoh: ['A1', 'C3', 'E2']
    $totalPrice = 0;

    foreach ($seats as $seat) {
        $row = strtoupper($seat[0]); // ambil huruf pertama: A/B/C/D/E
        $totalPrice += $priceMap[$row] ?? 0;
    }

    // Simpan ke session atau DB sesuai kebutuhan
    session([
        'selected_seats' => $seats,
        'total_price'    => $totalPrice,
        'movie_id'       => $movieId,
    ]);

    return redirect('/checkout/' . $movieId);
}
}