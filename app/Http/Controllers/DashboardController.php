<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Booking;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalMovies = Movie::count();

        $totalOrders = Booking::count();

        $pendingOrders = Booking::where(
            'status',
            'pending'
        )->count();

        $approvedOrders = Booking::where(
            'status',
            'approved'
        )->count();

        $paidOrders = Booking::where(
            'status',
            'paid'
        )->count();

        $totalRevenue = Booking::where(
            'status',
            'paid'
        )->sum('total_price');

        $totalUsers = User::count();

        $recentOrders = Booking::with([
            'user',
            'movie'
        ])
        ->latest()
        ->take(5)
        ->get();

        return view(
            'dashboard.index',
            compact(
                'totalMovies',
                'totalOrders',
                'pendingOrders',
                'approvedOrders',
                'paidOrders',
                'totalRevenue',
                'totalUsers',
                'recentOrders'
            )
        );
    }
}