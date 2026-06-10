

<?php $__env->startSection('content'); ?>

<div class="checkout-container">

    <div class="checkout-card">

        <h1>Pilih Pembayaran</h1>

        <form action="/payment/<?php echo e($booking->id); ?>"
              method="POST">

            <?php echo csrf_field(); ?>

            <div class="payment-options">

                <label class="payment-card">

                    <input type="radio"
                           name="payment_method"
                           value="qris"
                           required>

                    <div class="card-content">
                        <h4>QRIS</h4>
                    </div>

                </label>

                <label class="payment-card">

                    <input type="radio"
                           name="payment_method"
                           value="bank">

                    <div class="card-content">
                        <h4>Bank Transfer</h4>
                    </div>

                </label>

                <label class="payment-card">

                    <input type="radio"
                           name="payment_method"
                           value="offline">

                    <div class="card-content">
                        <h4>Bayar di Tempat</h4>
                    </div>

                </label>

            </div>

            <button class="btn-pay">
                Lanjutkan
            </button>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/payment.blade.php ENDPATH**/ ?>