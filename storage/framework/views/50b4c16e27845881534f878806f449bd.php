
<?php $__env->startSection('title','show product'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4 text-center">SHOW PRODUCT</h2>
                <form action="">
                    <input type="search" name="search" class="form-control" value="<?php echo e($search); ?>">
                    <button type="submit" class="btn btn-danger">Search</button>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">prod name</th>
                            <th scope="col">prod des</th>
                            <th scope="col">prod price</th>
                            <th scope="col">prod qty</th>
                            <th scope="col">prod image</th>
                            <th scope="col">prod status</th>
                            <th scope="col">action</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $abc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                        <tr>
                         
                            <td><?php echo e($p->name); ?></td>
                            <td><?php echo e($p->des); ?></td>
                            <td><?php echo e($p->price); ?></td>
                            <td><?php echo e($p->qty); ?></td>
                            <td>
                                <img src="<?php echo e(asset('prod/' . $p->image)); ?>" alt=""  width="50px" height="50px" class="rounded-circle">
                            </td>
  <td>       <a href="/products/<?php echo e($p->id); ?>" class="btn btn-<?php echo e($p->status ? "success" : "danger"); ?>"> <?php echo e($p->status ? "enable" : "disable"); ?></a></td>
                           <td>
                            <a href="/products/<?php echo e($p->id); ?>/edit" class="btn btn-warning">Update</a>
                            <a href="/products/<?php echo e($p->id); ?>/delete" class="btn btn-danger">delete</a>
                           </td>
                        </tr>
                      
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('./admin/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hy\Downloads\projlaravel\resources\views/admin/show.blade.php ENDPATH**/ ?>