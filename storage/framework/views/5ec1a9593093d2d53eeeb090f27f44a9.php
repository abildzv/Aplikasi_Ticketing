

<?php $__env->startSection('title', 'Select Seat'); ?>

<?php $__env->startSection('content'); ?>

<div class="booking-container">

    <div class="booking-header">
        <h1>Select Seat</h1>
        <p>Choose your favorite seats for the best viewing experience</p>
    </div>

    <div class="seat-legend">
        <div class="legend-item">
            <span class="legend regular-box"></span>
            Regular - Rp35K
        </div>
        <div class="legend-item">
            <span class="legend premium-box"></span>
            Premium - Rp50K
        </div>
        <div class="legend-item">
            <span class="legend vip-box"></span>
            VIP - Rp100K
        </div>
    </div>

    <div class="screen">SCREEN</div>

    <form method="POST" action="/select-seat/<?php echo e($movie->id); ?>">
    <?php echo csrf_field(); ?>

        <div class="seat-grid">

            
            <?php for($row = 1; $row <= 2; $row++): ?>
                <?php for($seat = 1; $seat <= 8; $seat++): ?>
                    <label class="seat regular">
                        <input type="checkbox" name="seats[]"
                            value="<?php echo e(chr(64 + $row)); ?><?php echo e($seat); ?>"
                            data-type="regular"
                            data-price="35000">
                        <span><?php echo e(chr(64 + $row)); ?><?php echo e($seat); ?></span>
                    </label>
                <?php endfor; ?>
            <?php endfor; ?>

            
            <?php for($row = 3; $row <= 4; $row++): ?>
                <?php for($seat = 1; $seat <= 8; $seat++): ?>
                    <label class="seat premium">
                        <input type="checkbox" name="seats[]"
                            value="<?php echo e(chr(64 + $row)); ?><?php echo e($seat); ?>"
                            data-type="premium"
                            data-price="50000">
                        <span><?php echo e(chr(64 + $row)); ?><?php echo e($seat); ?></span>
                    </label>
                <?php endfor; ?>
            <?php endfor; ?>

            
            <?php for($row = 5; $row <= 5; $row++): ?>
                <?php for($seat = 1; $seat <= 8; $seat++): ?>
                    <label class="seat vip">
                        <input type="checkbox" name="seats[]"
                            value="<?php echo e(chr(64 + $row)); ?><?php echo e($seat); ?>"
                            data-type="vip"
                            data-price="100000">
                        <span><?php echo e(chr(64 + $row)); ?><?php echo e($seat); ?></span>
                    </label>
                <?php endfor; ?>
            <?php endfor; ?>

        </div>

        <div class="booking-footer">
            <div class="price-box">
                <h3>Total</h3>
                <p id="total-price">Rp 0</p>
            </div>
            <button type="submit" class="btn-next">Continue to Checkout</button>
        </div>

    </form>

</div>

<script>
    // Hitung total harga setiap ada seat yang di-klik
    document.querySelectorAll('.seat input[type="checkbox"]').forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });

    function updateTotal() {
        let total = 0;

        document.querySelectorAll('.seat input[type="checkbox"]:checked').forEach(checked => {
            total += parseInt(checked.dataset.price);
        });

        document.getElementById('total-price').textContent =
            'Rp ' + total.toLocaleString('id-ID');
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/select-seat.blade.php ENDPATH**/ ?>