@extends('layouts.app')

@section('title', 'Tiket Saya')

@section('content')
<h2>Tiket Saya</h2>

@foreach($tickets as $ticket)
    <div style="border:1px solid black; margin:10px; padding:10px;">
        <h3>{{ $ticket->showtime->movie->title }}</h3>
        <p>Studio: {{ $ticket->showtime->studio->name }}</p>
        <p>Jam: {{ $ticket->showtime->start_time }}</p>
        <p>Kursi: {{ $ticket->seat->row }}{{ $ticket->seat->number }}</p>
    </div>
@endforeach

@endsection