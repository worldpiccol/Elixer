<?php $__env->startSection('title', 'Investment Plans'); ?>

<?php $__env->startSection('content'); ?>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Investment Plans</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Crypto</a></li>
                        <li class="breadcrumb-item active">Investment Plans</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
     <div class="row mt-4">
    <div class="col-lg-12">
        <div  style="border:none" class="card">
            <div class="card-body">

                <div class="row">

                    <?php $__empty_1 = true; $__currentLoopData = $schemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-xl-3 col-sm-6 mt-5">
                            <div style="" class="card mb-xl-0">
                                <div class="card-body">
                                    <div class="p-2">

                                        <h5 class="font-size-18 text-center fw-bolder"><strong><?php echo e($scheme->name); ?> </strong></h5>
                                        <h1 class="mt-3 text-center"> <?php echo e($scheme->rate); ?><span class="font-size-16 fw-medium">
                                            <?php if($scheme->rate_type === 'percent'): ?>
                                                %
                                            <?php else: ?>
                                                fixed
                                            <?php endif; ?>
                                            </span>

                                            <span class="text-muted font-size-16 fw-medium">/ <?php echo e($scheme->calc_period); ?></span></h1>
                                        <p class="text-muted mt-3 font-size-15"><?php echo e($scheme->description); ?></p>
                                        <hr>
                                        <div class="mt-1 pt-2 text-muted">

                                            <p class="mb-3 font-size-15">
                                                <i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>
                                                <Span>Duration: </Span> &nbsp;
                                                <span><strong> <?php echo e($scheme->terms); ?> <?php echo e($scheme->term_type); ?></strong></span>
                                            </p>
                                            <p class="mb-3 font-size-15">
                                                <i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>
                                                <Span>Minimum: </Span> &nbsp;
                                                <span><strong> <?php echo e($scheme->min_amount); ?> USD</strong></span>
                                            </p>
                                            <p class="mb-3 font-size-15">
                                                <i class="mdi mdi-check-circle text-secondary font-size-18 me-2"></i>
                                                <Span>Maximum: </Span> &nbsp;
                                                <span><strong> <?php if($scheme->max_amount == 0): ?>
                                                    Unlimited
                                                    <?php else: ?>
                                                        <?php echo e($scheme->max_amount); ?> USD
                                                    <?php endif; ?>
                                                </strong></span>
                                            </p>
                                            <p class="mb-3 font-size-15">
                                                <img src="<?php echo e($scheme->crypto->image_url); ?>" width="25" alt="">
                                                <Span class="text-muted fw-bolder"><strong><?php echo e($scheme->crypto->name); ?></strong></Span>

                                            </p>

                                        </div>
                                        <div class="text-center mt-4">
                                            <a class="btn btn-light" href="<?php echo e(route('user.invest.create', $scheme->id)); ?>">Invest Now</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <?php endif; ?>

                </div>
                <!-- end row -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/crypto-invest/schemes.blade.php ENDPATH**/ ?>