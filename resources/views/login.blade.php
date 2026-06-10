@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-box">

        <h2 class="login-title">Sign In</h2>
        <p class="login-subtitle">Access your account</p>

        {{-- Error --}}
        @if(session('error'))
            <div class="login-error">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">
                Sign In
            </button>

            <p class="login-footer">
                Don't have an account?
                <a href="/register">Sign Up</a>
            </p>
        </form>
    </div>
</div>
@endsection