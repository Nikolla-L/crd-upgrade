
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(Auth::user()->id == $post->user_id): ?>
            <h1 class="my-3">Edit the post</h1>
            <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value=<?php echo e($post->title); ?> />
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea type="text" name="body" id="body" class="form-control" rows="8"><?php echo e($post->body); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" id="image" class="form-control" />
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    <a href="/posts/<?php echo e($post->id); ?>" class="btn btn-outline-secondary">Cancle</a>
                </div>
            </form>
        <?php else: ?>
           <h1>What the hell were you trying?<br> Get out from here, now!</h1>
           <a href="/posts">&#171; Go Back</a>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\crudevich\resources\views/posts/edit.blade.php ENDPATH**/ ?>