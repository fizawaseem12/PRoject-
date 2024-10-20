


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
                    <form  method="post" action="<?php echo e(url("cart", $p->id)); ?>">
                     <?php echo csrf_field(); ?>
                      <div class="col-lg-3 col-md-6">
                        <input type="hidden" name="pid" value="<?php echo e($p->id); ?>">
                         <div class="coffee_img"><img src="<?php echo e(asset('prod/' . $p->image)); ?>"></div>
                         <h3 class="types_text"><?php echo e($p->name); ?></h3>
                         <p class="looking_text"><?php echo e($p->des); ?></p>
                         <p class="looking_text"><?php echo e($p->price); ?></p>
                         
                         <p class="looking_text">
                           <input type="number" name="qty" value="<?php echo e($p->qty); ?>" min="1">
                        </p>
                         
                           <button>add to cart</button>
                           
                        
                      </div>
                     </form>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Teacher\Pictures\projlaravel\resources\views/index.blade.php ENDPATH**/ ?>