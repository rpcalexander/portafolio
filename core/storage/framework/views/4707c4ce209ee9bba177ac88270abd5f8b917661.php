<section class="home section" id="home">
    <div class="slider">
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item">
            <img src="<?php echo e(asset('assets/front/img/'.$slider->image)); ?>" alt="">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="bg-overlay"></div>
    <div class="home-table">
        <div class="home-table-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h2 class="name">
                                <?php echo e($abouts->name); ?>

                            </h2>
                            <h2 class="header_title"> I'm a <span id="js-rotating"><?php echo e($abouts->position_type); ?></span> </h2>
                            <div class="header_btn">
                                <a href="#contact"
                                class="mybtn2"><span><?php echo e(__('Hire Me')); ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\portfolio\core\resources\views/front/partials/slider.blade.php ENDPATH**/ ?>