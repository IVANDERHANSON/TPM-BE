

<?php $__env->startSection('title', 'Create Book'); ?>

<?php $__env->startSection('body'); ?>

<div class="m-5">
  <h1 class="text-center">Create Book</h1>
  <form action="/store-book" method="POST">
      <?php echo csrf_field(); ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Title">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Author</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="Author">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">PublishDate</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate">
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Stock</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="Stock">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hanso\Desktop\TPM\pertemuan2\resources\views/createBook.blade.php ENDPATH**/ ?>