@extends('layouts.app')

@section('title', 'Select Seat')

@section('content')

<div class="booking-container">

    <div class="booking-header">
        <h1>Select Seat</h1>
        <p>Choose your favorite seats for the best viewing experience</p>
    </div>

    <div class="seat-legend">
        <div class="legend-item">
            <span class="legend regular-box"></span>
            Regular - Rp35K
        </div>
        <div class="legend-item">
            <span class="legend premium-box"></span>
            Premium - Rp50K
        </div>
        <div class="legend-item">
            <span class="legend vip-box"></span>
            VIP - Rp100K
        </div>
    </div>

    <div class="screen">SCREEN</div>

    <form method="POST" action="/select-seat/{{ $movie->id }}">
    @csrf

        <div class="seat-grid">

            {{-- ROW A & B = REGULAR --}}
            @for ($row = 1; $row <= 2; $row++)
                @for ($seat = 1; $seat <= 8; $seat++)
                    <label class="seat regular">
                        <input type="checkbox" name="seats[]"
                            value="{{ chr(64 + $row) }}{{ $seat }}"
                            data-type="regular"
                            data-price="35000">
                        <span>{{ chr(64 + $row) }}{{ $seat }}</span>
                    </label>
                @endfor
            @endfor

            {{-- ROW C & D = PREMIUM --}}
            @for ($row = 3; $row <= 4; $row++)
                @for ($seat = 1; $seat <= 8; $seat++)
                    <label class="seat premium">
                        <input type="checkbox" name="seats[]"
                            value="{{ chr(64 + $row) }}{{ $seat }}"
                            data-type="premium"
                            data-price="50000">
                        <span>{{ chr(64 + $row) }}{{ $seat }}</span>
                    </label>
                @endfor
            @endfor

            {{-- ROW E = VIP --}}
            @for ($row = 5; $row <= 5; $row++)
                @for ($seat = 1; $seat <= 8; $seat++)
                    <label class="seat vip">
                        <input type="checkbox" name="seats[]"
                            value="{{ chr(64 + $row) }}{{ $seat }}"
                            data-type="vip"
                            data-price="100000">
                        <span>{{ chr(64 + $row) }}{{ $seat }}</span>
                    </label>
                @endfor
            @endfor

        </div>

        <div class="booking-footer">
            <div class="price-box">
                <h3>Total</h3>
                <p id="total-price">Rp 0</p>
            </div>
            <button type="submit" class="btn-next">Continue to Checkout</button>
        </div>

    </form>

</div>

<script>
    // Hitung total harga setiap ada seat yang di-klik
    document.querySelectorAll('.seat input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });

    function updateTotal() {
        let total = 0;

        document.querySelectorAll('.seat input[type="checkbox"]:checked').forEach(checked => {
            total += parseInt(checked.dataset.price);
        });

        document.getElementById('total-price').textContent =
            'Rp ' + total.toLocaleString('id-ID');
    }
</script>

@endsection