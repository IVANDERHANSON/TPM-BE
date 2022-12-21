<?php $__env->startSection('title', 'welcome'); ?>

<?php $__env->startSection('body'); ?>
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  

  <?php for($i = 0; $i < 10; $i++): ?>
    <?php echo e($i); ?>

  <?php endfor; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hanso\Desktop\TPM\pertemuan2\resources\views/welcome.blade.php ENDPATH**/ ?>