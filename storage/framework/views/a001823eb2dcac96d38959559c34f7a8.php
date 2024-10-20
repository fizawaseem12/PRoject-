
<?php $__env->startSection('title','add product'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4  text-center">ADD PRODUCT</h2>
                <form action="/adddata" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">prod name</label>
                        <input type="text" name="prodname" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                  
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">prod des</label>
                        <input type="text" name="proddes" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
            
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">prod price</label>
                        <input type="text" name="prodprice" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
              
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">prod qty</label>
                        <input type="text" name="prodqty" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
              
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">prod image</label>
                        <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
              
                    </div>
                   
                    <button type="submit" class="btn btn-primary">add product</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('./admin/dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hy\Downloads\projlaravel\resources\views/admin/add.blade.php ENDPATH**/ ?>