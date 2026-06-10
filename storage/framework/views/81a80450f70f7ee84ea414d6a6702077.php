

<?php $__env->startSection('content'); ?>

<div class="success-container">

    <div class="checkout-card">

        <h1>E-Ticket</h1>

        <hr>

        <div class="payment-row">
            <span>Movie</span>
            <span><?php echo e($booking->movie->title); ?></span>
        </div>

        <div class="payment-row">
            <span>Seat</span>
            <span><?php echo e($booking->seats); ?></span>
        </div>

        <div class="payment-row">
            <span>Total</span>
            <span>
                Rp <?php echo e(number_format($booking->total_price,0,',','.')); ?>

            </span>
        </div>

        <div class="payment-row">
            <span>Payment</span>
            <span><?php echo e(strtoupper($booking->payment_method)); ?></span>
        </div>

        <div class="payment-row total">
            <span>Status</span>
            <span>PAID</span>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/ticket.blade.php ENDPATH**/ ?>