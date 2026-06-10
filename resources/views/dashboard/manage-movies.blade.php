@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/movies.css') }}">

<div class="admin-layout">

    <aside class="sidebar">
        <div class="sidebar-brand">
            <i class="ti ti-movie"></i>
            <span>CinemaAdmin</span>
        </div>
        <nav class="sidebar-nav">
            <a href="/dashboard" class="nav-item">
                <i class="ti ti-layout-dashboard"></i>
                Dashboard
            </a>
            <a href="/manage-movies" class="nav-item active">
                <i class="ti ti-device-tv"></i>
                Manage Movies
            </a>
            <a href="/orders" class="nav-item">
                <i class="ti ti-ticket"></i>
                Ticket Orders
            </a>
        </nav>
    </aside>

    <main class="admin-content">

        <div class="page-header">
            <div>
                <p class="page-eyebrow">Library</p>
                <h1 class="page-title">Manage Movies</h1>
            </div>
            <a href="/movies/create" class="btn-primary">
                <i class="ti ti-plus"></i>
                +  Add Movie
            </a>
        </div>

        <div class="table-card">
            <div class="table-wrapper">
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Poster</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                        <tr>
                            <td class="movie-number">{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/'.$movie->poster) }}" class="movie-poster">
                            </td>
                            <td class="font-medium">{{ $movie->title }}</td>
                            <td>
                                <span class="genre-badge">{{ $movie->genre }}</span>
                            </td>
                            <td class="movie-number">
                                <i class="ti ti-clock" style="vertical-align:-2px; margin-right:4px;"></i>
                                {{ $movie->duration }} min
                            </td>
                            <td>
                                <div class="action-group">
                                    <a href="/movies/{{ $movie->id }}/edit" class="btn-action btn-action--edit">
                                        <i class="ti ti-edit"></i>
                                        Edit
                                    </a>
                                    <form action="/movies/{{ $movie->id }}" method="POST" onsubmit="return confirm('Hapus movie ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action btn-action--delete">
                                            <i class="ti ti-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</div>
@endsection