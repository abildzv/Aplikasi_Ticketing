@extends('layouts.app')

@section('title','QRIS Payment')

@section('content')

<div class="success-container">

    <div class="checkout-card text-center">

        <h1>Scan QRIS</h1>

        <p>Scan QR berikut menggunakan E-Wallet favoritmu</p>

        <img src="{{ asset('images/qris.png') }}"
             width="250"
             style="margin:30px 0;">

        <form action="/payment-success/{{ $booking->id }}"
            method="POST">

        @csrf

        <button class="btn-pay">
            Saya Sudah Bayar
        </button>

    </form>

    </div>

</div>

@endsection