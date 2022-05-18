

<?php $__env->startSection('content'); ?>
<div class="container">

    <h1>Hello, this is Zack's movie review page!</h1>
    <h2>View or add my movie reviews!</h2>

    <div class="row">
        <div class="col-md-9">
            <div class="card" id="moviereviewtable">
                <div class="card-body"> 
                    <a href="<?php echo e(url('/moviereview/create')); ?>" class="btn btn-success btn-sm" title="Add New Movie Review">
                    <i class="fa fa-plus" aria-hidden="true"></i> 
                        Add New Movie Review
                    </a>
                    <br/>
                    <br/>
                    <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Movie Name</th>
                                        <th>Category</th>
                                        <th>Score * (0-100)</th>
                                        <th>Comments</th>
                                        <th>Date of Review</th>
                                        </tr>
                                </thead>
                            <tbody>
                                <?php $__currentLoopData = $moviereviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->moviename); ?></td>
                                        <td><?php echo e($item->category); ?></td>
                                        <td><?php echo e($item->score); ?></td>
                                        <td><?php echo e($item->comments); ?></td>
                                        <td><?php echo e($item->dateofreview); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/moviereview/' . $item->id)); ?>" title="View Movie Review"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/moviereview/' . $item->id . '/edit')); ?>" title="Edit Movie Review"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="<?php echo e(url('/moviereview' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Movie Review" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>

                        <div id="pagination">
                        <?php echo e($moviereviews->links('pagination::bootstrap-4')); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Hewlett Packard\fave\laravel\crud\resources\views/moviereview.blade.php ENDPATH**/ ?>