

<?php $__env->startSection('content'); ?>

<div class="card" id="editmoviereviewtable">
  <div class="card-header">Edit Existing Movie Review Page</div>
  <div class="card-body">
      
      <form action="<?php echo e(url('moviereview/' .$moviereviews->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($moviereviews->id); ?>" id="id" />

        <label>Movie Name</label></br>
        <input type="text" name="moviename" id="moviename" value="<?php echo e($moviereviews->name); ?>" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" value="<?php echo e($moviereviews->category); ?>" class="form-control"></br>
        <label>Score * (0-100)</label></br>
        <input type="text" name="score" id="score" value="<?php echo e($moviereviews->score); ?>" class="form-control"></br>
        <label>Comments</label></br>
        <input type="text" name="comments" id="comments" value="<?php echo e($moviereviews->comments); ?>" class="form-control"></br>
        <label>Date of Review</label></br>
        <input type="text" name="dateofreview" id="dateofreview" value="<?php echo e($moviereviews->dateofreview); ?>" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hewlett Packard\fave\laravel\crud\resources\views/moviereviews/edit.blade.php ENDPATH**/ ?>