

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/orders.css')); ?>">

<div class="admin-layout">

    <aside class="sidebar">
        <div class="sidebar-brand">
            <i class="ti ti-movie"></i>
            <span>CinemaAdmin</span>
        </div>
        <nav class="sidebar-nav">
            <a href="/dashboard" class="nav-item">
                <i class="ti ti-layout-dashboard"></i>
                Dashboard
            </a>
            <a href="/manage-movies" class="nav-item">
                <i class="ti ti-device-tv"></i>
                Manage Movies
            </a>
            <a href="/orders" class="nav-item active">
                <i class="ti ti-ticket"></i>
                Ticket Orders
            </a>
        </nav>
    </aside>

    <main class="admin-content">

        <div class="page-header">
            <div>
                <p class="page-eyebrow">Management</p>
                <h1 class="page-title">Ticket Orders</h1>
            </div>
        </div>

        <div class="table-card">
            <div class="table-wrapper">
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Movie</th>
                            <th>Seat</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-muted"><?php echo e($loop->iteration); ?></td>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar">
                                        <?php echo e(strtoupper(substr($order->user->name, 0, 1))); ?>

                                    </div>
                                    <?php echo e($order->user->name); ?>

                                </div>
                            </td>
                            <td class="font-medium"><?php echo e($order->movie->title); ?></td>
                            <td>
                                <span class="seat-badge">
                                    <i class="ti ti-armchair"></i>
                                    <?php echo e($order->seats); ?>

                                </span>
                            </td>
                            <td class="font-medium">
                                Rp <?php echo e(number_format($order->total_price, 0, ',', '.')); ?>

                            </td>
                            <td>
                                <?php if($order->status == 'pending'): ?>
                                    <span class="badge badge--pending">Pending</span>
                                <?php elseif($order->status == 'approved'): ?>
                                    <span class="badge badge--approved">Approved</span>
                                <?php elseif($order->status == 'paid'): ?>
                                    <span class="badge badge--paid">Paid</span>
                                <?php else: ?>
                                    <span class="badge badge--cancelled">Cancelled</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="action-group">
                                    <?php if($order->status == 'pending'): ?>
                                        <form action="/orders/<?php echo e($order->id); ?>/approve" method="POST" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn-action btn-action--approve">
                                                <i class="ti ti-check"></i>
                                                Accept
                                            </button>
                                        </form>
                                    <?php elseif($order->status == 'approved'): ?>
                                        <form action="/orders/<?php echo e($order->id); ?>/paid" method="POST" style="display:inline;">
                                            <?php echo csrf_field(); ?>
                                            <button type="submit" class="btn-action btn-action--approve">
                                                <i class="ti ti-circle-check"></i>
                                                Mark as Paid
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                    <form action="/orders/<?php echo e($order->id); ?>" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus pesanan ini?')">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn-action btn-action--delete">
                                            <i class="ti ti-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/dashboard/orders.blade.php ENDPATH**/ ?>