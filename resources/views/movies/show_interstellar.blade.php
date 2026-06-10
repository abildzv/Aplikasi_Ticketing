@extends('layouts.app')

@section('content')

<div class="movie-show-page">

    <div class="movie-banner">
        <img src="{{ asset('images/movies/interstellar.jpg') }}" alt="">
    </div>

    <div class="movie-overlay"></div>

    <div class="container movie-content">

        <div class="movie-poster">
            <img src="{{ asset('images/movies/interstellar.jpg') }}" alt="">
        </div>

        <div class="movie-detail-content">

            <span class="movie-tag">NOW SHOWING</span>

            <h1>Interstellar</h1>

            <div class="movie-meta-detail">
                <span>⭐ 8.6 IMDb</span>
                <span>• Sci-Fi</span>
                <span>• Adventure</span>
                <span>• 2h 49m</span>
            </div>

            <p class="movie-description">
                A team of explorers travel through a wormhole in space
                in an attempt to ensure humanity's survival. 
                Directed by Christopher Nolan with stunning visuals,
                emotional storytelling, and epic space exploration.
            </p>

            <div class="showtime-section">

                <h3>Select Showtime</h3>

                <div class="showtime-list">
                    <button>10:00</button>
                    <button>13:30</button>
                    <button>16:00</button>
                    <button>19:30</button>
                </div>

            </div>

            <div class="booking-form">

                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" placeholder="Enter your name">
                </div>

                <div class="form-group">
                    <label>Total Ticket</label>
                    <input type="number" min="1" value="1">
                </div>

                <button class="btn-confirm-book">
                    Confirm Booking
                </button>

            </div>

        </div>

    </div>

</div>

@endsection