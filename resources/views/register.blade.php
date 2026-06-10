@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-box">

        <h2 class="login-title">Create Account</h2>
        <p class="login-subtitle">Join MultiFlex right now</p>

        {{-- Error --}}
        @if($errors->any())
            <div class="login-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="/register">
            @csrf

            <input type="text" name="name" placeholder="Full Name" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit" class="btn-login">
                Sign Up
            </button>

            <p class="login-footer">
                Already have an account?
                <a href="/login">Sign In</a>
            </p>
        </form>
    </div>
</div>
@endsection