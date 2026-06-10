@if (
    request()->is('dashboard') ||
    request()->is('manage-movies') ||
    request()->is('orders')
)

<header class="admin-navbar">
    <div class="container">
        <div class="admin-nav-wrapper">

            <div class="admin-logo">
                Multi<span>Flex</span> Admin
            </div>

            <form action="{{ url('/logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout-admin">
                    Logout
                </button>
            </form>

        </div>
    </div>
</header>

@else

<header id="navbar" class="navbar-custom fixed-top">
    <div class="container">
        <div class="nav-wrapper">

            <div class="logo">
                Multi<span>Flex</span>
            </div>

            <div class="menu">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/movies') }}">Now Showing</a>
                <a href="{{ url('/schedule') }}">Schedules</a>
                <a href="{{ url('/promo') }}">Promo</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </div>

            <div style="display:flex; align-items:center; gap:12px;">

                @auth

                    <a href="{{ url('/my-ticket') }}">
                        <button class="btn-red">
                            My Ticket
                        </button>
                    </a>

                    <i class="bi bi-person" style="color:#ccc; font-size:16px;"></i>
                    <span style="color:#ccc; font-size:13px;">Welcome, {{ Auth::user()->name }}</span>

                    <a href="#" onclick="document.getElementById('logout-form').submit(); return false;"
                       style="background:rgba(255,255,255,0.1); color:#ccc; border:1px solid rgba(255,255,255,0.2); border-radius:14px; padding:6px 14px; font-size:12px; text-decoration:none;">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display:none;">
                        @csrf
                    </form>

                @else

                    <button class="btn-red" onclick="document.getElementById('auth-modal').style.display='flex'">
                        Buy Ticket
                    </button>

                    <a href="{{ url('/login') }}" class="nav-signin">
                        <i class="bi bi-person"></i> Sign In
                    </a>

                @endauth

            </div>

        </div>
    </div>
</header>

<!-- Auth Modal -->
<div id="auth-modal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.6); z-index:9999; align-items:center; justify-content:center;">
    <div style="background:#1a1a2e; border:1px solid rgba(255,255,255,0.1); border-radius:16px; padding:36px 32px; width:100%; max-width:360px; text-align:center; position:relative;">

        <!-- Close -->
        <button onclick="document.getElementById('auth-modal').style.display='none'"
            style="position:absolute; top:12px; right:16px; background:none; border:none; color:#aaa; font-size:20px; cursor:pointer;">✕</button>

        <!-- Icon -->
        <div style="font-size:40px; margin-bottom:12px;">🎬</div>

        <!-- Text -->
        <h3 style="color:#fff; margin:0 0 8px;">Login Required</h3>
        <p style="color:#aaa; font-size:13px; margin-bottom:24px;">
            You need to login first to buy tickets for your favorite movies.
        </p>

        <!-- Buttons -->
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

@endif

<script>
    // Close modal when clicking outside
    document.getElementById('auth-modal')?.addEventListener('click', function(e) {
        if (e.target === this) this.style.display = 'none';
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        if (!navbar) return;
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>