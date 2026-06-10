@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<div class="checkout-container">

    <div class="checkout-card">

        <h1>Checkout</h1>

        {{-- Detail Film --}}
        <div class="movie-detail">

            <img src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->title }}">

            <div>
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->genre }} • {{ $movie->duration }}</p>
                <p>Seats: {{ implode(', ', $seats) }}</p>
            </div>

        </div>

        {{-- Detail Pembayaran --}}
        <div class="payment-detail">

            @php
                $priceMap = [
                    'A' => 35000,
                    'B' => 35000,
                    'C' => 50000,
                    'D' => 50000,
                    'E' => 100000
                ];

                $adminFee = 2000;
            @endphp

            @foreach ($seats as $seat)

                @php
                    $row = strtoupper($seat[0]);
                    $price = $priceMap[$row] ?? 0;

                    $type = $row <= 'B'
                        ? 'Regular'
                        : ($row <= 'D'
                            ? 'Premium'
                            : 'VIP');
                @endphp

                <div class="payment-row">
                    <span>Seat {{ $seat }} ({{ $type }})</span>
                    <span>Rp {{ number_format($price, 0, ',', '.') }}</span>
                </div>

            @endforeach

            <div class="payment-row">
                <span>Admin Fee</span>
                <span>Rp {{ number_format($adminFee, 0, ',', '.') }}</span>
            </div>

            <div class="payment-row total">
                <span>Total</span>
                <span>Rp {{ number_format($total + $adminFee, 0, ',', '.') }}</span>
            </div>

        </div>

        
        <form action="/payment" method="POST">

        @csrf

        <button class="btn-pay">
            Pesan Tiket
        </button>

    </form>

    </div>

</div>

@endsection