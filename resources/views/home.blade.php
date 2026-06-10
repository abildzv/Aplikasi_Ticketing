@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <div class="info">
            <span class="year">2014</span>

            <h1>INTERSTELLAR</h1>

            <div class="genres">
                <span>Sci-Fi</span>
                <span>Drama</span>
                <span>Adventure</span>
            </div>

            <p class="desc">
                When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot,
                Joseph Cooper, is tasked to pilot a spacecraft with a team of researchers
                to find a new habitable planet for mankind.
            </p>

            <div class="rating">
                ⭐ 9.5 / 10
            </div>

            <div class="buttons">
                <button class="btn-red">▶ Buy Ticket</button>
                <button class="btn-outline">+ Schedule</button>
            </div>

        </div>

        <div class="side-preview">
            <img src="{{ asset('images/movies/interstellar1.jpg') }}" alt="Interstellar">
            <img src="{{ asset('images/movies/thesupermariogalaxy1.jpg') }}" alt="Mario Galaxy">
            <img src="{{ asset('images/movies/kimetsunoyaiba1.jpg') }}" alt="Kimetsu No Yaiba">
        </div>

    </div>
</section>

<section class="movies">
    <div class="container">

        <h2 class="section-title">Now Showing</h2>

        <div class="movie-grid">

            <div class="movie-card">
                <img src="{{ asset('images/movies/kimetsunoyaiba.jpg') }}" alt="Kimetsu No Yaiba">
                <div class="movie-info">
                    <h4>Kimetsu No Yaiba Infinity Castle</h4>
                    <span>9.0 ⭐</span>
                </div>
            </div>

            <div class="movie-card">
                <img src="{{ asset('images/movies/ghostinthecell.jpg') }}" alt="Ghost In The Cell">
                <div class="movie-info">
                    <h4>Ghost In The Cell</h4>
                    <span>8.0 ⭐</span>
                </div>
            </div>

            <div class="movie-card">
                <img src="{{ asset('images/movies/leecroninsthemummy.jpg') }}" alt="The Mummy">
                <div class="movie-info">
                    <h4>Lee Cronin's The Mummy</h4>
                    <span>8.9 ⭐</span>
                </div>
            </div>

            <div class="movie-card">
                <img src="{{ asset('images/movies/finaldestination.jpg') }}" alt="Final Destination">
                <div class="movie-info">
                    <h4>Final Destination Bloodlines</h4>
                    <span>8.5 ⭐</span>
                </div>
            </div>

            <div class="movie-card">
                <img src="{{ asset('images/movies/thesupermariogalaxy.jpg') }}" alt="Super Mario Galaxy">
                <div class="movie-info">
                    <h4>The Super Mario Galaxy Movie</h4>
                    <span>9.2 ⭐</span>
                </div>
            </div>

            <div class="movie-card">
                <img src="{{ asset('images/movies/hoppers.jpg') }}" alt="Hoppers">
                <div class="movie-info">
                    <h4>Hoppers</h4>
                    <span>8.5 ⭐</span>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection