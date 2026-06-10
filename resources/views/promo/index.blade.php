@extends('layouts.app')

@section('content')

<div class="promo-page container">

    <div class="promo-header">
        <h1>Special Promos</h1>
        <p>Enjoy attractive promotions for the best viewing experience</p>
    </div>

    <div class="promo-grid">

        <div class="promo-card">
            <img src="{{ asset('images/movies/buy1get1.jpg') }}" alt="">

            <div class="promo-content">
                <span class="promo-badge">50% OFF</span>

                <h3>Buy 1 Get 1 Ticket</h3>

                <p>
                    Get special promos for all movies every Friday.
                </p>

                <a href="#" class="promo-btn">
                    Claim Promo
                </a>
            </div>
        </div>

        <div class="promo-card">
            <img src="{{ asset('images/movies/popcorncombo.jpg') }}" alt="">

            <div class="promo-content">
                <span class="promo-badge">LIMITED</span>

                <h3>Free Popcorn Combo</h3>

                <p>
                   Free popcorn and drink with purchase of 3 tickets.
                </p>

                <a href="#" class="promo-btn">
                    Claim Promo
                </a>
            </div>
        </div>

        <div class="promo-card">
            <img src="{{ asset('images/movies/studentsdiscount.jpg') }}" alt="">

            <div class="promo-content">
                <span class="promo-badge">NEW</span>

                <h3>Student Discount</h3>

                <p>
                    Students & college students can get discounts up to 30%.
                </p>

                <a href="#" class="promo-btn">
                    Claim Promo
                </a>
            </div>
        </div>

    </div>

</div>

@endsection