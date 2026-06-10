

<?php $__env->startSection('title','Bank Transfer'); ?>

<?php $__env->startSection('content'); ?>

<div class="success-container">

    <div class="checkout-card">

        <h1>Transfer Bank</h1>

        <br>

        <div class="payment-row">
            <span>Bank</span>
            <span>BCA</span>
        </div>

        <div class="payment-row">
            <span>No Rekening</span>
            <span>1234567890</span>
        </div>

        <div class="payment-row">
            <span>Atas Nama</span>
            <span>MultiFlex Cinema</span>
        </div>

        <br>

        <div class="payment-row">
            <span>Total Tiket</span>
            <span>
                Rp <?php echo e(number_format($booking->total_price, 0, ',', '.')); ?>

            </span>
        </div>

        <div class="payment-row">
            <span>Biaya Admin</span>
            <span>Rp 2.000</span>
        </div>

        <div class="payment-row total">
            <span>Total Bayar</span>
            <span>
                Rp <?php echo e(number_format($booking->total_price + 2000, 0, ',', '.')); ?>

            </span>
        </div>

        <br>

        <form action="/payment-success/<?php echo e($booking->id); ?>" method="POST">

            <?php echo csrf_field(); ?>

            <button class="btn-pay">
                Saya Sudah Transfer
            </button>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/bank.blade.php ENDPATH**/ ?>