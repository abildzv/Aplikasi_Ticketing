

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="<?php echo e(asset('css/my-ticket.css')); ?>">

<div class="ticket-container">

    <h1 class="ticket-title">
        My Tickets
    </h1>

    <div class="ticket-grid">

        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="ticket-card">

            <h2><?php echo e($booking->movie->title); ?></h2>

            <p>
                <strong>Seats:</strong>
                <?php echo e($booking->seats); ?>

            </p>

            <p>
                <strong>Total:</strong>
                Rp <?php echo e(number_format($booking->total_price,0,',','.')); ?>

            </p>

            <p>
                <strong>Status:</strong>
                <?php echo e(ucfirst($booking->status)); ?>

            </p>

            <?php if($booking->status == 'pending'): ?>

                <div class="ticket-status pending">
                    ⏳ Tiket sedang menunggu persetujuan admin.
                    <br>
                    Silakan cek halaman My Ticket secara berkala.
                </div>

            <?php elseif($booking->status == 'approved'): ?>

                <div class="ticket-status approved">
                    ✅ Tiket telah disetujui admin.
                    <br>
                    Silakan lakukan pembayaran.
                </div>

                <a href="/payment/<?php echo e($booking->id); ?>"
                   class="btn-pay-ticket">

                    Bayar Sekarang

                </a>

            <?php elseif($booking->status == 'paid'): ?>

                <div class="ticket-status paid">
                    🎟️ Pembayaran berhasil.
                    Tiket siap digunakan.
                </div>

                <a href="/ticket/<?php echo e($booking->id); ?>"
                   class="btn-ticket">

                    Lihat E-Ticket

                </a>

            <?php elseif($booking->status == 'rejected'): ?>

                <div class="ticket-status rejected">
                    ❌ Pesanan ditolak admin.
                </div>

            <?php endif; ?>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/booking/my-ticket.blade.php ENDPATH**/ ?>