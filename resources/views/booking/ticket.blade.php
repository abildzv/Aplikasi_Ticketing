@extends('layouts.app')

@section('content')

<div class="success-container">

    <div class="checkout-card">

        <h1>E-Ticket</h1>

        <hr>

        <div class="payment-row">
            <span>Movie</span>
            <span>{{ $booking->movie->title }}</span>
        </div>

        <div class="payment-row">
            <span>Seat</span>
            <span>{{ $booking->seats }}</span>
        </div>

        <div class="payment-row">
            <span>Total</span>
            <span>
                Rp {{ number_format($booking->total_price,0,',','.') }}
            </span>
        </div>

        <div class="payment-row">
            <span>Payment</span>
            <span>{{ strtoupper($booking->payment_method) }}</span>
        </div>

        <div class="payment-row total">
            <span>Status</span>
            <span>PAID</span>
        </div>

    </div>

</div>

@endsection