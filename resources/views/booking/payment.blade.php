@extends('layouts.app')

@section('content')

<div class="checkout-container">

    <div class="checkout-card">

        <h1>Pilih Pembayaran</h1>

        <form action="/payment/{{ $booking->id }}"
              method="POST">

            @csrf

            <div class="payment-options">

                <label class="payment-card">

                    <input type="radio"
                           name="payment_method"
                           value="qris"
                           required>

                    <div class="card-content">
                        <h4>QRIS</h4>
                    </div>

                </label>

                <label class="payment-card">

                    <input type="radio"
                           name="payment_method"
                           value="bank">

                    <div class="card-content">
                        <h4>Bank Transfer</h4>
                    </div>

                </label>

                <label class="payment-card">

                    <input type="radio"
                           name="payment_method"
                           value="offline">

                    <div class="card-content">
                        <h4>Bayar di Tempat</h4>
                    </div>

                </label>

            </div>

            <button class="btn-pay">
                Lanjutkan
            </button>

        </form>

    </div>

</div>

@endsection