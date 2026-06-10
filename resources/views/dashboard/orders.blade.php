@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/orders.css') }}">

<div class="admin-layout">

    <aside class="sidebar">
        <div class="sidebar-brand">
            <i class="ti ti-movie"></i>
            <span>CinemaAdmin</span>
        </div>
        <nav class="sidebar-nav">
            <a href="/dashboard" class="nav-item">
                <i class="ti ti-layout-dashboard"></i>
                Dashboard
            </a>
            <a href="/manage-movies" class="nav-item">
                <i class="ti ti-device-tv"></i>
                Manage Movies
            </a>
            <a href="/orders" class="nav-item active">
                <i class="ti ti-ticket"></i>
                Ticket Orders
            </a>
        </nav>
    </aside>

    <main class="admin-content">

        <div class="page-header">
            <div>
                <p class="page-eyebrow">Management</p>
                <h1 class="page-title">Ticket Orders</h1>
            </div>
        </div>

        <div class="table-card">
            <div class="table-wrapper">
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Movie</th>
                            <th>Seat</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td class="text-muted">{{ $loop->iteration }}</td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar">
                                        {{ strtoupper(substr($order->user->name, 0, 1)) }}
                                    </div>
                                    {{ $order->user->name }}
                                </div>
                            </td>
                            <td class="font-medium">{{ $order->movie->title }}</td>
                            <td>
                                <span class="seat-badge">
                                    <i class="ti ti-armchair"></i>
                                    {{ $order->seats }}
                                </span>
                            </td>
                            <td class="font-medium">
                                Rp {{ number_format($order->total_price, 0, ',', '.') }}
                            </td>
                            <td>
                                @if($order->status == 'pending')
                                    <span class="badge badge--pending">Pending</span>
                                @elseif($order->status == 'approved')
                                    <span class="badge badge--approved">Approved</span>
                                @elseif($order->status == 'paid')
                                    <span class="badge badge--paid">Paid</span>
                                @else
                                    <span class="badge badge--cancelled">Cancelled</span>
                                @endif
                            </td>
                            <td>
                                <div class="action-group">
                                    @if($order->status == 'pending')
                                        <form action="/orders/{{ $order->id }}/approve" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn-action btn-action--approve">
                                                <i class="ti ti-check"></i>
                                                Accept
                                            </button>
                                        </form>
                                    @elseif($order->status == 'approved')
                                        <form action="/orders/{{ $order->id }}/paid" method="POST" style="display:inline;">
                                            @csrf
                                            <button type="submit" class="btn-action btn-action--approve">
                                                <i class="ti ti-circle-check"></i>
                                                Mark as Paid
                                            </button>
                                        </form>
                                    @endif
                                    <form action="/orders/{{ $order->id }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus pesanan ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action btn-action--delete">
                                            <i class="ti ti-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</div>
@endsection