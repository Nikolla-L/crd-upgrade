<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <?php if(count($posts) > 0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card my-3">
                        <div class="card-header">
                            <h3><?php echo e($post->title); ?></h3>
                        </div>
                        <div class="card-body">
                            <p><?php echo e($post->about); ?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <small><?php echo e($post->created_at); ?></small>
                            <a href="/posts/<?php echo e($post->id); ?>" class="btn btn-outline-primary">More</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <div class="card">
                    <h3 class="m-4 text-secondary">There is not any posts yet...</h3>
                    <a class="btn btn-outline-primary m-3" href="/posts/create">Create your own post and share to the world</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\crudevich\resources\views/home.blade.php ENDPATH**/ ?>