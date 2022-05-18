<?php $__env->startSection('content'); ?>
    <div>
        <h1>This is the home page for Zack's personal movie review app!</h1>
        <h2>Click the button below to write some movie reviews!</h2>
            <img id="movie_review" src="img/movie_review.jpg" alt="movie_review">
        <div id=gotobutton>
            <button>
                <a class="buttontext" href="/moviereview">Go to my movie review page!</a>
            </button>   
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hewlett Packard\fave\laravel\crud\resources\views/homepage.blade.php ENDPATH**/ ?>