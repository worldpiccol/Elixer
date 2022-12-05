<?php $__env->startSection('title', 'Transactions'); ?>

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Swap History</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                    <li class="breadcrumb-item active">Transactions</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
 <div class="row mt-5">
    <div class="col-12">
    <div class="card">

        <div class="card-body px-0">

            <div class="table-responsive px-3">
                <table class="table table-all align-middle table-nowrap table-borderless">
                    <tbody>

                        <?php $__currentLoopData = $swaps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-bottom">

                            <td style="width: 50px;">
                                <div class="font-size-22 text-success">
                                    <i class="bx bx-move-horizontal d-block"></i>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><?php echo e($tran->description); ?></h5>
                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: <?php echo e($tran->swap_ref); ?></span> <span><?php echo e($tran->created_at->diffForHumans()); ?></span></p>
                                </div>
                            </td>

                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0"><?php echo e($tran->from_amount); ?> <?php echo e($tran->fromCrypto->symbol); ?></h5>
                                        <p class="text-muted mb-0 font-size-12"> from amount</p>
                                    </div>
                                </td>


                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0"><?php echo e($tran->to_amount); ?> <?php echo e($tran->toCrypto->symbol); ?></h5>
                                        <p class="text-muted mb-0 font-size-12">to amount</p>
                                    </div>
                                </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                <div>
                    <?php echo $swaps->render(); ?>

                </div>
            </div>
        </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/transactions/swap.blade.php ENDPATH**/ ?>