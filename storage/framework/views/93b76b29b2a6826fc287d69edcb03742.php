

<?php $__env->startSection('title','QRIS Payment'); ?>

<?php $__env->startSection('content'); ?>

<div class="success-container">

    <div class="checkout-card text-center">

        <h1>Scan QRIS</h1>

        <p>Scan QR berikut menggunakan E-Wallet favoritmu</p>

        <img src="<?php echo e(asset('images/qris.png')); ?>"
             width="250"
             style="margin:30px 0;">

        <form action="/payment-success/<?php echo e($booking->id); ?>"
            method="POST">

        <?php echo csrf_field(); ?>

        <button class="btn-pay">
            Saya Sudah Bayar
        </button>

    </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/qris.blade.php ENDPATH**/ ?>