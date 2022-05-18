

<?php $__env->startSection('content'); ?>

<div class="card" id="showmoviereview">
<div class="card-body">
  
        <div class="card-body">
            <h3 class="card-title">Movie Name : <?php echo e($moviereviews->moviename); ?></h3>
            <p class="card-text">Category  : <?php echo e($moviereviews->category); ?></p>
            <p class="card-text">Score * (0-100) : <?php echo e($moviereviews->score); ?></p>
            <p class="card-text">Comments : <?php echo e($moviereviews->comments); ?></p>
            <p class="card-text">Date of Review : <?php echo e($moviereviews->dateofreview); ?></p>
        </div>
        </hr>

</div>
</div>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hewlett Packard\fave\laravel\crud\resources\views/moviereviews/show.blade.php ENDPATH**/ ?>