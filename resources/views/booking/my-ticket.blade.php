@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/my-ticket.css') }}">

<div class="ticket-container">

    <h1 class="ticket-title">
        My Tickets
    </h1>

    <div class="ticket-grid">

        @foreach($bookings as $booking)

        <div class="ticket-card">

            <h2>{{ $booking->movie->title }}</h2>

            <p>
                <strong>Seats:</strong>
                {{ $booking->seats }}
            </p>

            <p>
                <strong>Total:</strong>
                Rp {{ number_format($booking->total_price,0,',','.') }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ ucfirst($booking->status) }}
            </p>

            @if($booking->status == 'pending')

                <div class="ticket-status pending">
                    ⏳ Tiket sedang menunggu persetujuan admin.
                    <br>
                    Silakan cek halaman My Ticket secara berkala.
                </div>

            @elseif($booking->status == 'approved')

                <div class="ticket-status approved">
                    ✅ Tiket telah disetujui admin.
                    <br>
                    Silakan lakukan pembayaran.
                </div>

                <a href="/payment/{{ $booking->id }}"
                   class="btn-pay-ticket">

                    Bayar Sekarang

                </a>

            @elseif($booking->status == 'paid')

                <div class="ticket-status paid">
                    🎟️ Pembayaran berhasil.
                    Tiket siap digunakan.
                </div>

                <a href="/ticket/{{ $booking->id }}"
                   class="btn-ticket">

                    Lihat E-Ticket

                </a>

            @elseif($booking->status == 'rejected')

                <div class="ticket-status rejected">
                    ❌ Pesanan ditolak admin.
                </div>

            @endif

        </div>

        @endforeach

    </div>

</div>

@endsection