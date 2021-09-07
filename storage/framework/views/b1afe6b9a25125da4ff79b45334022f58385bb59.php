
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1 class="my-3">Create new post</h1>
        <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" />
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea type="text" name="body" id="body" class="form-control"  rows="8" placeholder="type somethinbg..."></textarea>
            </div>
            <div class="form-group">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image" class="form-control" />
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\crudevich\resources\views/posts/create.blade.php ENDPATH**/ ?>