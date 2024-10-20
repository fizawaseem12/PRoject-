<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">product name</th>
                    <th scope="col">product des</th>
                    <th scope="col">product price</th>
                    <th scope="col">product qty</th>
                    <th scope="col">product image</th>
                    <th scope="col">product total price</th>
                  </tr>
                </thead>
                <tbody>

<?php
    $totalprice = 0;
?>

                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                 
                  <tr>
               
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->des); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->qty); ?></td>
                    <td><img src="<?php echo e(asset('prod/' . $product->image)); ?>" width="50px" height="50px"></td>
                    <td><?php echo e($product->price * $product->qty); ?></td>
                  </tr>


                  <?php
                      $totalprice += $product->price * $product->qty ;
                  ?>
                  <tr>
                    <td>total price</td>
                    <td><?php echo e($totalprice); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <tr><td><a href="/checkout" class="btn btn-danger
                  ">checkout</a></td></tr>
                </tbody>
              </table>
        </div>
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\Users\hy\Desktop\projlaravel\resources\views/cartdetail.blade.php ENDPATH**/ ?>