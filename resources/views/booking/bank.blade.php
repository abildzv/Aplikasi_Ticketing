@extends('layouts.app')

@section('title','Bank Transfer')

@section('content')

<div class="success-container">

    <div class="checkout-card">

        <h1>Transfer Bank</h1>

        <br>

        <div class="payment-row">
            <span>Bank</span>
            <span>BCA</span>
        </div>

        <div class="payment-row">
            <span>No Rekening</span>
            <span>1234567890</span>
        </div>

        <div class="payment-row">
            <span>Atas Nama</span>
            <span>MultiFlex Cinema</span>
        </div>

        <br>

        <div class="payment-row">
            <span>Total Tiket</span>
            <span>
                Rp {{ number_format($booking->total_price, 0, ',', '.') }}
            </span>
        </div>

        <div class="payment-row">
            <span>Biaya Admin</span>
            <span>Rp 2.000</span>
        </div>

        <div class="payment-row total">
            <span>Total Bayar</span>
            <span>
                Rp {{ number_format($booking->total_price + 2000, 0, ',', '.') }}
            </span>
        </div>

        <br>

        <form action="/payment-success/{{ $booking->id }}" method="POST">

            @csrf

            <button class="btn-pay">
                Saya Sudah Transfer
            </button>

        </form>

    </div>

</div>

@endsection