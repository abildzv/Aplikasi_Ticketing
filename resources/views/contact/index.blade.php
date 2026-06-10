@extends('layouts.app')

@section('content')

<div class="contact-page container">

    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>Contact us for questions or assistance</p>
    </div>

    <div class="contact-wrapper">

        <div class="contact-info">

            <div class="contact-box">
                <h3>Email</h3>
                <p>support@multiflex.com</p>
            </div>

            <div class="contact-box">
                <h3>Phone</h3>
                <p>+62 812 3456 7890</p>
            </div>

            <div class="contact-box">
                <h3>Location</h3>
                <p>Cibaduyut, Indonesia</p>
            </div>

        </div>

        <div class="contact-form">

            <input type="text" placeholder="Your Name">

            <input type="email" placeholder="Your Email">

            <textarea rows="5" placeholder="Message"></textarea>

            <button>
                Send Message
            </button>

        </div>

    </div>

</div>

@endsection