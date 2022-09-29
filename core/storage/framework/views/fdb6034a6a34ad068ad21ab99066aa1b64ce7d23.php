<?php if($setting->isservice == 1): ?>
<!-- Service Area Start -->
<div id="services" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title">
                    <h2 class=" "><?php echo e($setting->service_title); ?></h2>
                    <span class=" "><?php echo e($setting->service_title); ?></span>
                </div>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-md-6">
                    <a href="<?php echo e(route('front.servicedetails', $service->id)); ?>" class="item  ">
                        <img src="<?php echo e(asset('assets/front/img/'.$service->image)); ?>" alt="">
                        <h6 class="title"><?php echo e($service->title); ?></h6>
                        <p><?php echo e($service->description); ?></p>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</div>
<!-- Service Area End -->
<?php endif; ?><?php /**PATH /home/u964887345/domains/nacionalcode.online/public_html/cms1/core/resources/views/front/partials/section-partials/service.blade.php ENDPATH**/ ?>