@extends('layouts.app')

@section('title', 'Booking Success')

@section('content')

<div class="success-container">

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>

        <h1>Booking Successful!</h1>

        <p>
            Your ticket has been successfully booked.
        </p>

        <div class="ticket-info">

            <div class="ticket-row">
                <span>Movie</span>
                <span>Interstellar</span>
            </div>

            <div class="ticket-row">
                <span>Seat</span>
                <span>A1, A2</span>
            </div>

            <div class="ticket-row">
                <span>Total</span>
                <span>Rp 52.000</span>
            </div>

        </div>

        <a href="/" class="btn-home">
            Back to Home
        </a>

    </div>

</div>

@endsection