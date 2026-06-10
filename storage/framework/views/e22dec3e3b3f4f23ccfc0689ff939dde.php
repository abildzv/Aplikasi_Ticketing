

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/movies.css')); ?>">

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
            <a href="/manage-movies" class="nav-item active">
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
                <p class="page-eyebrow">Library</p>
                <h1 class="page-title">Manage Movies</h1>
            </div>
            <a href="/movies/create" class="btn-primary">
                <i class="ti ti-plus"></i>
                +  Add Movie
            </a>
        </div>

        <div class="table-card">
            <div class="table-wrapper">
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Poster</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="movie-number"><?php echo e($loop->iteration); ?></td>
                            <td>
                                <img src="<?php echo e(asset('storage/'.$movie->poster)); ?>" class="movie-poster">
                            </td>
                            <td class="font-medium"><?php echo e($movie->title); ?></td>
                            <td>
                                <span class="genre-badge"><?php echo e($movie->genre); ?></span>
                            </td>
                            <td class="movie-number">
                                <i class="ti ti-clock" style="vertical-align:-2px; margin-right:4px;"></i>
                                <?php echo e($movie->duration); ?> min
                            </td>
                            <td>
                                <div class="action-group">
                                    <a href="/movies/<?php echo e($movie->id); ?>/edit" class="btn-action btn-action--edit">
                                        <i class="ti ti-edit"></i>
                                        Edit
                                    </a>
                                    <form action="/movies/<?php echo e($movie->id); ?>" method="POST" onsubmit="return confirm('Hapus movie ini?')">
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/dashboard/manage-movies.blade.php ENDPATH**/ ?>