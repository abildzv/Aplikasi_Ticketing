

<?php $__env->startSection('content'); ?>
<div class="login-wrapper">
    <div class="login-box">

        <h2 class="login-title">Create Account</h2>
        <p class="login-subtitle">Join MultiFlex right now</p>

        
        <?php if($errors->any()): ?>
            <div class="login-error">
                <?php echo e($errors->first()); ?>

            </div>
        <?php endif; ?>

        <form method="POST" action="/register">
            <?php echo csrf_field(); ?>

            <input type="text" name="name" placeholder="Full Name" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit" class="btn-login">
                Sign Up
            </button>

            <p class="login-footer">
                Already have an account?
                <a href="/login">Sign In</a>
            </p>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/register.blade.php ENDPATH**/ ?>