<?php $__env->startSection('title', 'Investment'); ?>

<?php $__env->startSection('content'); ?>
<style>
    .icon-demo-content i {

        display: inline-flex;
        width: 50px;
        height: 50px;
        align-items: center;

        justify-content: center;
        font-size: 20px;
        color: var(--bs-gray-600);
        -webkit-transition: all .4s;
        transition: all .4s;
        border: 1px solid var(--bs-gray-300);
        border-radius: 50%;
        margin-right: 16px;
        vertical-align: middle;
    }

</style>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Crypto Stakes</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crypto Staking</a></li>
                    <li class="breadcrumb-item active">Active Stakes</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-5">
    <div class="col-md-12">
       <ul class="nav nav-tabs" >
            <li class="nav-item" >
                <a class="nav-link active" href="<?php echo e(route('user.invest.crypto')); ?>" >

                    <span class="d-none d-sm-block">Active Stakes</span>
                </a>
            </li>
            <li class="nav-item" >
                <a class="nav-link"  href="<?php echo e(route('user.invest.history')); ?>" >
                    <span class="d-none d-sm-block">Completed Stakes</span>
                </a>
            </li>

        </ul>
    </div>
</div>
 <div class="row mt-5">
    <div class="col-md-8 offset-md-2">
        <div style="border:none;" class="card">
            <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Stakes</h4>
            </div><!-- end card header -->

            <div class="card-body ">
            <div class="card-deck mt-2">

                <?php $__empty_1 = true; $__currentLoopData = $active_invests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div  style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;border:none;" class="card">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-2 text-center">
                            <img class="img-fluid" src="<?php echo e($invest->investScheme->crypto->image_url); ?>" width="60" alt="">
                        </div>
                        <div class="col-md-9">
                            <div style="padding: 15px !important;" class="card-body">
                                <h3 class="card-title"><strong><?php echo e($invest->investScheme->name); ?> - <?php echo e($invest->investScheme->rate); ?> % /  <?php echo e($invest->investScheme->calc_period); ?></strong></h3>
                                <div class="card-body">
                                    <?php
                                        $percent = ($invest->term_count / $invest->term_total) * 100/1 ;
                                    ?>
                                    <div style="width:80%;" class="progress p-0">
                                        <div class="progress-bar bg-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo e($percent); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($percent); ?>%"></div>
                                    </div>

                                </div>
                                <p class="card-text font-size-15"><small class="text-muted"> Maturity: <?php echo e($invest->term_end->diffForHumans()); ?></small></p>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="float-end icon-demo-content ms-5">
                                <a href="<?php echo e(route('user.invest.show', $invest->id)); ?>"><i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <p>No stakes yet</p>
                <?php endif; ?>

            </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <!-- end col -->
</div><!-- end row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/crypto-invest/index.blade.php ENDPATH**/ ?>