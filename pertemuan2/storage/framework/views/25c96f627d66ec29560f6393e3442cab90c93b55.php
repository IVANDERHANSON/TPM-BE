<?php $__env->startSection('title', 'welcome'); ?>

<?php $__env->startSection('body'); ?>

<div class="d-flex m-5">
  <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?php echo e($book->Title); ?></h5>
        <p class="card-text"><?php echo e($book->Author); ?></p>
        <p class="card-text"><?php echo e($book->PublishDate); ?></p>
        <p class="card-text"><?php echo e($book->Stock); ?></p>
        <a href="<?php echo e(route('show', $book->id)); ?>" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

  

  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hanso\Desktop\TPM\pertemuan2\resources\views/welcome.blade.php ENDPATH**/ ?>