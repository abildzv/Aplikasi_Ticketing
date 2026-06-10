

<?php $__env->startSection('title', 'Booking Success'); ?>

<?php $__env->startSection('content'); ?>

<div class="success-container">

    <div class="success-card">

        <div class="success-icon">
            ✓
        </div>

        <h1>Booking Successful!</h1>

        <p>
            Your ticket has been successfully booked.
        </p>

        <div class="ticket-info">

            <div class="ticket-row">
                <span>Movie</span>
                <span>Interstellar</span>
            </div>

            <div class="ticket-row">
                <span>Seat</span>
                <span>A1, A2</span>
            </div>

            <div class="ticket-row">
                <span>Total</span>
                <span>Rp 52.000</span>
            </div>

        </div>

        <a href="/" class="btn-home">
            Back to Home
        </a>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/succes.blade.php ENDPATH**/ ?>