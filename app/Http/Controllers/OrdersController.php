<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Booking::latest()->get();

        return view('dashboard.orders', compact('orders'));
    }
    public function markAsPaid($id)
{
    $order = Booking::findOrFail($id);
    $order->status = 'paid';
    $order->save();

    return back();
}

    public function accept($id)
    {
        $order = Booking::findOrFail($id);

        $order->status = 'approved';

        $order->save();

        return back();
    }

    public function reject($id)
    {
        $order = Booking::findOrFail($id);

        $order->status = 'rejected';

        $order->save();

        return back();
    }
    public function destroy($id)
    {
        $order = Booking::findOrFail($id);

        $order->delete();

        return back()->with(
            'success',
            'Pesanan berhasil dihapus'
        );
    }
}
