<?php $__env->startSection('content'); ?>
    <div>
        <h1>This is the home page for the movie review app!</h1>
        <h2>Click this link to write your movie review!</h2>
        <div id=gotobutton>
            <button>
                <a href="/moviereview">Go to movie review page!</a>
            </button>   
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hewlett Packard\fave\laravel\crud\resources\views/welcome.blade.php ENDPATH**/ ?>