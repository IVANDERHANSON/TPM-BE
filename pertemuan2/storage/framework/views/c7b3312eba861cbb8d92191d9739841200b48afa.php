

<?php $__env->startSection('title', 'show book'); ?>;

<?php $__env->startSection('body'); ?>
    <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo e($book->Title); ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo e($book->Author); ?></h6>
      <p class="card-text"><?php echo e($book->PublishDate); ?></p>
      <p class="card-text"><?php echo e($book->Stock); ?></p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hanso\Desktop\TPM\pertemuan2\resources\views/showbook.blade.php ENDPATH**/ ?>