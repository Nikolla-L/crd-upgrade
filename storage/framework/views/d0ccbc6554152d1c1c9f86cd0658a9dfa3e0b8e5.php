
<?php $__env->startSection('content'); ?>
    <div class="container">
        <a class="mx-3" href="/posts">&#171; Go Back</a>
        <div class="card my-3">
            <div class="card-header">
                <h3><?php echo e($post->title); ?></h3>
            </div>
            <div class="card-body">
                <?php if($post->image !== 'NoImage.jpg'): ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img style="width: 100%; height: 100%; object-fit: contain" src="/storage/images/<?php echo e($post->image); ?>" alt="img">
                        </div>
                        <div class="col-md-8">
                            <main><?php echo e($post->body); ?></main>
                        </div>
                    </div>
                <?php else: ?>
                    <main><?php echo e($post->body); ?></main>
                <?php endif; ?>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <small><?php echo e($post->created_at); ?></small>
                <?php if(!Auth::guest()): ?>
                    <?php if(Auth::user()->id == $post->user_id): ?>
                        <div class="d-flex">
                            <a href="/posts/<?php echo e($post->id); ?>/edit" class="btn btn-primary mx-3">Edit</a>
                            <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
                                <?php echo method_field('DELETE'); ?>
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <button  class="btn btn-danger">Delete</a>
                            </form>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\crudevich\resources\views/posts/show.blade.php ENDPATH**/ ?>