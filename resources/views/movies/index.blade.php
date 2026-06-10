@extends('layouts.app')

@section('content')
<div class="nowshowing-section container">

    <div class="section-header">
        <h1>Now Showing</h1>
        <p>Latest movies currently showing</p>
    </div>

    <div class="movie-grid">

    @foreach($movies as $movie)

    <div class="movie-card">

        <div class="movie-img">

            <img src="{{ asset('storage/' . $movie->poster) }}"
                 alt="{{ $movie->title }}">

            <div class="overlay">
                @auth
                    <a href="{{ url('/select-seat/' . $movie->id) }}" class="btn-book">
                        Book Now
                    </a>
                @else
                    <a href="#" class="btn-book" onclick="document.getElementById('auth-modal').style.display='flex'; return false;">
                        Book Now
                    </a>
                @endauth
            </div>

        </div>

        <div class="movie-info">
            <h4>{{ $movie->title }}</h4>

            <div class="movie-meta">
                <span>⭐ {{ $movie->rating }}</span>
                <span>• {{ $movie->genre }}</span>
            </div>
        </div>

    </div>

    @endforeach

    </div>

</div>

<!-- Auth Modal -->
<div id="auth-modal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.6); z-index:9999; align-items:center; justify-content:center;">
    <div style="background:#1a1a2e; border:1px solid rgba(255,255,255,0.1); border-radius:16px; padding:36px 32px; width:100%; max-width:360px; text-align:center; position:relative;">

        <button onclick="document.getElementById('auth-modal').style.display='none'"
            style="position:absolute; top:12px; right:16px; background:none; border:none; color:#aaa; font-size:20px; cursor:pointer;">✕</button>

        <div style="font-size:40px; margin-bottom:12px;">🎬</div>

        <h3 style="color:#fff; margin:0 0 8px;">Login Required</h3>
        <p style="color:#aaa; font-size:13px; margin-bottom:24px;">
            You need to login first to book a seat for your favorite movies.
        </p>

        <div style="display:flex; gap:10px;">
            <a href="{{ url('/login') }}" style="flex:1; background:#e50914; color:#fff; border-radius:10px; padding:10px; text-decoration:none; font-weight:600; font-size:14px;">
                Login
            </a>
            <a href="{{ url('/register') }}" style="flex:1; background:rgba(255,255,255,0.1); color:#fff; border:1px solid rgba(255,255,255,0.2); border-radius:10px; padding:10px; text-decoration:none; font-weight:600; font-size:14px;">
                Register
            </a>
        </div>

    </div>
</div>

<script>
    document.getElementById('auth-modal')?.addEventListener('click', function(e) {
        if (e.target === this) this.style.display = 'none';
    });
</script>

@endsection