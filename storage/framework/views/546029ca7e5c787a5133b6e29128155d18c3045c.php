
<?php $__env->startSection('content'); ?>
<div class="card" id="createmoviereviewtable">
  <div class="card-header">Make New Movie Review Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('moviereview')); ?>" method="post">
        <?php echo csrf_field(); ?>


        <label>Movie Name</label></br>
        <input type="text" name="moviename" id="moviename" class="form-control"></br>
        <label>Category </label></br>
        <input type="text" name="category" id="category" class="form-control"></br>
        <label>Score * (0-100)</label></br>
        <input type="text" name="score" id="score" class="form-control"></br>
        <label>Comments</label></br>
        <input type="text" name="comments" id="comments" class="form-control"></br>
        <label>Date of Review</label></br>
        <input type="text" name="dateofreview" id="dateofreview" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hewlett Packard\fave\laravel\crud\resources\views/moviereviews/create.blade.php ENDPATH**/ ?>