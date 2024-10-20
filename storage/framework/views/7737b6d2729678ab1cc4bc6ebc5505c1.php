
<style>
   <style>
    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .card-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
        margin-bottom: 0.5rem;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .btn-dark {
        background-color: #343a40;
        color: #fff;
        border: none;
    }

    .btn-dark:hover {
        background-color: #23272b;
        color: #fff;
    }
</style>

</style>

<?php $__env->startSection('title','coffeee '); ?>
<?php $__env->startSection("banner"); ?>
<div class="banner_section layout_padding">
    <div class="container">
       <div id="banner_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
                <div class="row">
                   <div class="col-md-6">
                      <div class="banner_img"><img src="images/banner-img.png"></div>
                   </div>
                   <div class="col-md-6">
                      <div class="banner_taital_main">
                         <h1 class="banner_taital">coffee</h1>
                         <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                         <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                         <div class="btn_main">
                            <div class="about_bt"><a href="#">About Us</a></div>
                            <div class="callnow_bt active"><a href="#">Call Now</a></div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col-md-6">
                      <div class="banner_img"><img src="images/banner-img.png"></div>
                   </div>
                   <div class="col-md-6">
                      <div class="banner_taital_main">
                         <h1 class="banner_taital">coffee</h1>
                         <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                         <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                         <div class="btn_main">
                            <div class="about_bt"><a href="#">About Us</a></div>
                            <div class="callnow_bt active"><a href="#">Call Now</a></div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="carousel-item">
                <div class="row">
                   <div class="col-md-6">
                      <div class="banner_img"><img src="images/banner-img.png"></div>
                   </div>
                   <div class="col-md-6">
                      <div class="banner_taital_main">
                         <h1 class="banner_taital">coffee</h1>
                         <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                         <p class="banner_text">more-or-less normal distribution of letters, as opposed to using </p>
                         <div class="btn_main">
                            <div class="about_bt"><a href="#">About Us</a></div>
                            <div class="callnow_bt active"><a href="#">Call Now</a></div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
          <i class="fa fa-arrow-left"></i>
          </a>
          <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-right"></i>
          </a>
       </div>
    </div>
 </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection("content"); ?>
<div class="coffee_section layout_padding">
    <div class="container">
       <div class="row">
          <h1 class="coffee_taital">OUR Coffee OFFER</h1>
          <div class="bulit_icon"><img src="images/bulit-icon.png"></div>
       </div>
    </div>
    <div class="coffee_section_2">
       <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <div class="carousel-item active">
             <div class="container-fluid">
    <div class="row">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-4 mb-3"> <!-- Adjust the column width as needed -->
            <form method="post" action="<?php echo e(url('cart', $p->id)); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="pid" value="<?php echo e($p->id); ?>">
                <div class="card">
                    <img class="card-img-top" src="<?php echo e(asset('prod/' . $p->image)); ?>" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($p->name); ?></h5>
                        <p class="card-text"><?php echo e($p->des); ?></p>
                        <p class="card-text">Price: <?php echo e($p->price); ?></p>
                        <div class="form-group">
                            <label for="qty" >Quantity:</label>
                            <input type="number" class="form-control" id="qty" name="qty" value="<?php echo e($p->qty); ?>" min="1">
                            </div>
                        <button type="submit" class="btn btn-dark">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

</div>

             </div>
             
          </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
          <i class="fa fa-arrow-left"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-right"></i>
          </a>
       </div>
    </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hy\Desktop\Address Book\resources\views/index.blade.php ENDPATH**/ ?>