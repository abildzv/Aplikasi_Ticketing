

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">

<div class="admin-layout">

    <aside class="sidebar">
        <div class="sidebar-brand">
            <i class="ti ti-movie"></i>
            <span>CinemaAdmin</span>
        </div>
        <nav class="sidebar-nav">
            <a href="/dashboard" class="nav-item active">
                <i class="ti ti-layout-dashboard"></i>
                Dashboard
            </a>
            <a href="/manage-movies" class="nav-item">
                <i class="ti ti-device-tv"></i>
                Manage Movies
            </a>
            <a href="/orders" class="nav-item">
                <i class="ti ti-ticket"></i>
                Ticket Orders
            </a>
        </nav>
    </aside>

    <main class="admin-content">

        <div class="page-header">
            <div>
                <p class="page-eyebrow">Overview</p>
                <h1 class="page-title">Dashboard</h1>
            </div>
        </div>

        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon icon-blue">
                    <i class="ti ti-movie"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Total Movies</span>
                    <span class="stat-value"><?php echo e($totalMovies); ?></span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon icon-purple">
                    <i class="ti ti-shopping-cart"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Total Orders</span>
                    <span class="stat-value"><?php echo e($totalOrders); ?></span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon icon-amber">
                    <i class="ti ti-clock"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Pending Orders</span>
                    <span class="stat-value"><?php echo e($pendingOrders); ?></span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon icon-teal">
                    <i class="ti ti-circle-check"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Approved Orders</span>
                    <span class="stat-value"><?php echo e($approvedOrders); ?></span>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon icon-green">
                    <i class="ti ti-credit-card"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Paid Orders</span>
                    <span class="stat-value"><?php echo e($paidOrders); ?></span>
                </div>
            </div>

            <div class="stat-card stat-card--revenue">
                <div class="stat-icon icon-coral">
                    <i class="ti ti-cash"></i>
                </div>
                <div class="stat-info">
                    <span class="stat-label">Total Revenue</span>
                    <span class="stat-value stat-value--revenue">
                        Rp <?php echo e(number_format($totalRevenue, 0, ',', '.')); ?>

                    </span>
                </div>
            </div>

        </div>

        <div class="recent-orders">

            <div class="section-header">
                <h2 class="section-title">Recent Orders</h2>
            </div>

            <div class="table-wrapper">
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Movie</th>
                            <th>Seats</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $recentOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td>
                                <div class="user-cell">
                                    <div class="user-avatar">
                                        <?php echo e(strtoupper(substr($order->user->name, 0, 1))); ?>

                                    </div>
                                    <?php echo e($order->user->name); ?>

                                </div>
                            </td>
                            <td><?php echo e($order->movie->title); ?></td>
                            <td>
                                <span class="seat-badge">
                                    <i class="ti ti-armchair"></i>
                                    <?php echo e($order->seats); ?>

                                </span>
                            </td>
                            <td>
                                <?php if($order->status == 'pending'): ?>
                                    <span class="badge badge--pending">Pending</span>
                                <?php elseif($order->status == 'approved'): ?>
                                    <span class="badge badge--approved">Approved</span>
                                <?php elseif($order->status == 'paid'): ?>
                                    <span class="badge badge--paid">Paid</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4" class="empty-state">
                                <i class="ti ti-inbox"></i>
                                <span>Belum ada pesanan</span>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </main>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/dashboard/index.blade.php ENDPATH**/ ?>