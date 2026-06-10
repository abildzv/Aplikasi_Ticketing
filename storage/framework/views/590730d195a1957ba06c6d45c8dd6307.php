

<?php $__env->startSection('content'); ?>
<div class="login-wrapper">
    <div class="login-box">

        <h2 class="login-title">Sign In</h2>
        <p class="login-subtitle">Access your account</p>

        
        <?php if(session('error')): ?>
            <div class="login-error">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="/login">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn-login">
                Sign In
            </button>

            <p class="login-footer">
                Don't have an account?
                <a href="/register">Sign Up</a>
            </p>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/login.blade.php ENDPATH**/ ?>