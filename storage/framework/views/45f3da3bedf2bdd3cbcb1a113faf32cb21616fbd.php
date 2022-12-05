<?php $__env->startSection('title', 'Investment Schemes'); ?>;

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Investment Schemes</h4>
        </div>
    </div>
</div>
  <div class="row mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                <div class="row">

                    <?php $__empty_1 = true; $__currentLoopData = $schemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-xl-3 col-sm-6 mt-5">
                            <div class="card mb-xl-0">
                                <div class="card-body">
                                    <div class="p-2">
                                        <div class="dropdown text-end mb-3">
                                            <a class="text-muted dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                              <i class="bx bx-dots-horizontal-rounded"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="<?php echo e(route('admin.iv.edit', $scheme->id)); ?>">Edit Scheme</a>
                                                <a class="dropdown-item" href="<?php echo e(route('admin.scheme.status', $scheme->id)); ?>"><?php echo e($scheme->status === 'active' ? 'Mark Inactive' : 'Mark Active'); ?></a>
                                                <a class="dropdown-item" href="<?php echo e(route('admin.iv.delete', $scheme->id)); ?>">Remove Scheme</a>
                                            </div>
                                        </div>
                                        <h5 class="font-size-18"><strong><?php echo e($scheme->name); ?> </strong><small class=""><span class="badge rounded-pill <?php echo e($scheme->status === 'active' ? 'bg-soft-success text-success' : 'bg-soft-danger text-danger'); ?> float-end"><?php echo e($scheme->status === 'active' ?  'Active' : 'Inactive'); ?></span></small></h5>
                                        <h1 class="mt-3"> <?php echo e($scheme->rate); ?><span class="font-size-16 fw-medium">
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/iv_schemes/index.blade.php ENDPATH**/ ?>