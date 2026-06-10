<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManageMoviesController;
use App\Http\Controllers\OrdersController;

// HOME
Route::get('/', [HomeController::class, 'index']);

// AUTH (LOGIN)
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// REGISTER
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// DASHBOARD (manage movies dan orders)
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/manage-movies', [ManageMoviesController::class, 'index']);

// Hapus data user waktu mesen
Route::delete('/orders/{id}', [OrdersController::class, 'destroy']);

// Hapus data movie
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);
// Edit data movie
Route::get('/movies/{id}/edit', [MovieController::class, 'edit']);
Route::put('/movies/{id}', [MovieController::class, 'update']);

// Order acc
Route::get('/orders', [OrdersController::class, 'index']);
//admin acc paid status
Route::post('/orders/{id}/approve', [OrdersController::class, 'accept']);
Route::post('/orders/{id}/paid', [OrdersController::class, 'markAsPaid']);
Route::delete('/orders/{id}', [OrdersController::class, 'destroy']);

// MOVIES
Route::resource('/movies', MovieController::class);

/* BOOKING
Route::get('/booking/{showtime}', [BookingController::class, 'selectSeat']);
Route::post('/booking', [BookingController::class, 'store']);
Route::get('/booking', function () {
    return view('booking.select-seat');
});

Route::get('/my-tickets', [UserController::class, 'tickets']);

Route::get('/checkout', function () {
    return view('booking.checkout');
});

Route::get('/succes', function () {
    return view('booking.succes');
});
*/

// booking
Route::get('/select-seat/{id}', [SeatController::class, 'index']);
Route::post('/select-seat/{id}', [SeatController::class, 'store']);

Route::get('/checkout/{id}', [CheckoutController::class, 'show']);
Route::post('/checkout', [CheckoutController::class, 'pay']);

// tiket user
// Route::get('/my-tickets', [UserController::class, 'tickets']);

// STATIC PAGES
Route::get('/schedule', function () {
    return view('showtimes.index');
});

Route::get('/movies-page', function () {
    return view('movies.index');
});

Route::get('/promo', function () {
    return view('promo.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/show/interstellar', function () {
    return view('movies.show_interstellar');
});

// METODE PAYMENT
Route::middleware('auth')->group(function () {
    Route::get('/select-seat/{id}', [SeatController::class, 'index']);
    Route::post('/select-seat/{id}', [SeatController::class, 'store']);
    Route::get('/checkout/{id}', [CheckoutController::class, 'show']);
    // Route::post('/payment', [PaymentController::class, 'store']);
});

/* Route::post('/payment', function () {
    if(request('payment_method') == 'qris'){
        return view('booking.qris');
    }
    return view('booking.bank');
});*/

Route::post('/payment', [BookingController::class, 'store'])->middleware('auth');

/* Route::get('/success', function () {
    return view('booking.succes');
});*/

Route::get('/ticket/{id}', [BookingController::class, 'ticket'])->middleware('auth');

// ACC Admin
Route::post('/booking/{id}/approve', [BookingController::class, 'approve'])->middleware('auth');

// My Ticket
Route::get('/my-ticket', [BookingController::class, 'myTicket'])->middleware('auth');

Route::get('/payment/{id}', [BookingController::class, 'payment'])->middleware('auth');

// Payment
Route::post('/payment/{id}', [BookingController::class, 'processPayment']);
Route::post('/payment-success/{id}', [BookingController::class, 'paymentSuccess']);

/* E-Ticket
Route::get('/ticket/{id}', [BookingController::class, 'ticket']);
*/