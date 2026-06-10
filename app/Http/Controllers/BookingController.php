<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        Booking::create([
            'user_id' => Auth::id(),
            'movie_id' => session('movie_id'),
            'seats' => implode(',', session('selected_seats')),
            'total_ticket' => count(session('selected_seats')),
            'total_price' => session('total_price'),
            'payment_method' => null,
            'status' => 'pending'
        ]);
        return redirect('/my-ticket')
            ->with(
                'success',
                'Pesanan berhasil dibuat. Tunggu admin menyetujui pesanan.'
        );
    }

    public function approve($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->status = 'approved';

        $booking->save();

        return back();
    }

    public function myTicket()
    {
        $bookings = Booking::with('movie')
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view(
            'booking.my-ticket',
            compact('bookings')
        );
    }
    public function payment($id)
    {
        $booking = Booking::findOrFail($id);

        return view(
            'booking.payment',
            compact('booking')
        );
    }

    public function processPayment(
            Request $request,
            $id
        )
    {
            $booking = Booking::findOrFail($id);

            $booking->payment_method =
            $request->payment_method;

            $booking->save();

        if ($request->payment_method == 'qris') {

        return view(
            'booking.qris',
            compact('booking')
        );
    }

        if ($request->payment_method == 'bank') {

            return view(
                'booking.bank',
                compact('booking')
            );
        }

        $booking->status = 'paid';

        $booking->save();

        return redirect(
            '/ticket/' . $booking->id
        );
    }
    public function paymentSuccess($id)
{
    $booking = Booking::findOrFail($id);

    if ($booking->payment_method == 'bank') {
        $booking->total_price += 2000;
    }

    $booking->status = 'paid';
    $booking->save();

    return redirect('/ticket/' . $booking->id);
}

    public function ticket($id)
    {
        $booking = Booking::with('movie')
            ->findOrFail($id);

        return view('booking.ticket', compact('booking'));
    }
}