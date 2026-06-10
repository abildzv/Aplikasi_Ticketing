

<?php $__env->startSection('title', 'Checkout'); ?>

<?php $__env->startSection('content'); ?>

<div class="checkout-container">

    <div class="checkout-card">

        <h1>Checkout</h1>

        
        <div class="movie-detail">

            <img src="<?php echo e(asset('storage/' . $movie->poster)); ?>" alt="<?php echo e($movie->title); ?>">

            <div>
                <h2><?php echo e($movie->title); ?></h2>
                <p><?php echo e($movie->genre); ?> • <?php echo e($movie->duration); ?></p>
                <p>Seats: <?php echo e(implode(', ', $seats)); ?></p>
            </div>

        </div>

        
        <div class="payment-detail">

            <?php
                $priceMap = [
                    'A' => 35000,
                    'B' => 35000,
                    'C' => 50000,
                    'D' => 50000,
                    'E' => 100000
                ];

                $adminFee = 2000;
            ?>

            <?php $__currentLoopData = $seats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php
                    $row = strtoupper($seat[0]);
                    $price = $priceMap[$row] ?? 0;

                    $type = $row <= 'B'
                        ? 'Regular'
                        : ($row <= 'D'
                            ? 'Premium'
                            : 'VIP');
                ?>

                <div class="payment-row">
                    <span>Seat <?php echo e($seat); ?> (<?php echo e($type); ?>)</span>
                    <span>Rp <?php echo e(number_format($price, 0, ',', '.')); ?></span>
                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="payment-row">
                <span>Admin Fee</span>
                <span>Rp <?php echo e(number_format($adminFee, 0, ',', '.')); ?></span>
            </div>

            <div class="payment-row total">
                <span>Total</span>
                <span>Rp <?php echo e(number_format($total + $adminFee, 0, ',', '.')); ?></span>
            </div>

        </div>

        
        <form action="/payment" method="POST">

        <?php echo csrf_field(); ?>

        <button class="btn-pay">
            Pesan Tiket
        </button>

    </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/checkout.blade.php ENDPATH**/ ?>