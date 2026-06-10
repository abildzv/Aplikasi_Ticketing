

<?php $__env->startSection('content'); ?>

<div class="container text-white" style="margin-top: 90px;">

    <div class="card bg-dark border-0 shadow-lg p-4 rounded-4">

        <div class="mb-4">
            <h2 class="fw-bold">🎬</h2>
            <p class="text-secondary">Add New Movie</p>
        </div>

        <form action="/movies" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="row">

                <!-- LEFT -->
                <div class="col-md-6">

                    <div class="mb-3">
                        <label class="form-label text-white">Movie Title</label>
                        <input type="text" name="title" class="form-control form-control-lg bg-dark text-white border-secondary" placeholder="e.g. Interstellar">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Genre</label>
                        <input type="text" name="genre" class="form-control bg-dark text-white border-secondary" placeholder="Sci-Fi, Action">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Duration</label>
                        <input type="text" name="duration" class="form-control bg-dark text-white border-secondary" placeholder="2h 30m">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Release Date</label>
                        <input type="date" name="release_date" class="form-control bg-dark text-white border-secondary">
                    </div>

                </div>

                <!-- RIGHT -->
                <div class="col-md-6">

                    <div class="mb-3">
                        <label class="form-label text-white">Description</label>
                        <textarea name="description" rows="7" class="form-control bg-dark text-white border-secondary" placeholder="Movie description..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Poster Image</label>
                        <input type="file" name="poster" class="form-control bg-dark text-white border-secondary">
                    </div>

                    <div class="mb-3">
                        <label class="form-label text-white">Rating</label>
                        <input type="number" name="rating" step="0.1" min="0" max="10" class="form-control bg-dark text-white border-secondary" placeholder="e.g. 8.5">
                    </div>
                </div>

            </div>

            <!-- BUTTON -->
            <div class="mt-4 d-flex justify-content-end">
                <button class="btn btn-danger px-5 py-2 rounded-pill shadow">
                    ➕ Save Movie
                </button>
            </div>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Sabila\aplikasi_ticketing\resources\views/movies/create.blade.php ENDPATH**/ ?>