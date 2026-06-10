@extends('layouts.app')

@section('content')

<div class="schedule-page container">

    <div class="schedule-header">
        <h1>Movie Schedules</h1>
        <p>Choose your favorite movie schedule today</p>
    </div>

    {{-- INTERSTELLAR --}}
    <div class="schedule-card">

        <div class="schedule-poster">
            <img src="{{ asset('images/movies/interstellar.jpg') }}" alt="">
        </div>

        <div class="schedule-info">

            <h2>Interstellar</h2>

            <div class="schedule-meta">
                <span>⭐ 8.6</span>
                <span>• Sci-Fi</span>
                <span>• 2h 49m</span>
            </div>

            <div class="cinema-list">

                <div class="cinema-item">
                    <h4>Cinema XXI</h4>

                    <div class="time-list">
                        <a href="/show/interstellar">10:00</a>
                        <a href="/show/interstellar">13:30</a>
                        <a href="/show/interstellar">16:00</a>
                        <a href="/show/interstellar">19:30</a>
                    </div>
                </div>

                <div class="cinema-item">
                    <h4>CGV</h4>

                    <div class="time-list">
                        <a href="/show/interstellar">11:15</a>
                        <a href="/show/interstellar">14:45</a>
                        <a href="/show/interstellar">18:00</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- AVENGERS --}}
    <div class="schedule-card">

        <div class="schedule-poster">
            <img src="{{ asset('images/movies/avengersdoomsday.jpg') }}" alt="">
        </div>

        <div class="schedule-info">

            <h2>Avengers Doomsday</h2>

            <div class="schedule-meta">
                <span>⭐ 8.9</span>
                <span>• Action</span>
                <span>• 3h 01m</span>
            </div>

            <div class="cinema-list">

                <div class="cinema-item">
                    <h4>Cinema XXI</h4>

                    <div class="time-list">
                        <a href="#">12:00</a>
                        <a href="#">15:30</a>
                        <a href="#">20:00</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- MORTAL KOMBAT --}}
    <div class="schedule-card">

        <div class="schedule-poster">
            <img src="{{ asset('images/movies/mortalkombat2.jpg') }}" alt="">
        </div>

        <div class="schedule-info">

            <h2>Mortal Kombat II</h2>

            <div class="schedule-meta">
                <span>⭐ 8.1</span>
                <span>• Action</span>
                <span>• 2h 10m</span>
            </div>

            <div class="cinema-list">

                <div class="cinema-item">
                    <h4>CGV</h4>

                    <div class="time-list">
                        <a href="#">10:30</a>
                        <a href="#">14:00</a>
                        <a href="#">17:45</a>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection