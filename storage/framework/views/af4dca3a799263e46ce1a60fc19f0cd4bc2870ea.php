<?php $__env->startSection('title', 'Transactions'); ?>

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Transactions</h4>

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

                        <?php $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="border-bottom">
                            <?php if($tran->type ==='deposit'): ?>
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-success">
                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                    </div>
                                </td>
                            <?php elseif($tran->type ==='credit'): ?>
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-success">
                                        <i class="bx bx-right-arrow-circle d-block"></i>
                                    </div>
                                </td>
                             <?php elseif($tran->type ==='debit'): ?>
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-danger">
                                        <i class="bx bx-left-arrow-circle d-block"></i>
                                    </div>
                                </td>
                            <?php elseif($tran->type ==='rewards'): ?>
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-success">
                                        <i class="bx bx-right-arrow-circle d-block"></i>
                                    </div>
                                </td>
                            <?php else: ?>

                                <td style="width: 50px;">
                                    <div class="font-size-22 text-warning">
                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                    </div>
                                </td>

                            <?php endif; ?>

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1"><?php echo e(Str::ucfirst($tran->type)); ?></h5>
                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: <?php echo e($tran->tnx_id); ?></span> <span><?php echo e($tran->completed_at ?? $tran->created_at->diffForHumans()); ?></span></p>
                                </div>
                            </td>

                            <?php if($tran->balance_id !== null): ?>
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0"><?php echo e(round($tran->amount, 4)); ?> <?php echo e($tran->crypto->symbol); ?></h5>
                                        <p class="text-muted mb-0 font-size-12"> <?php echo e($tran->crypto->symbol); ?> Wallet</p>
                                    </div>
                                </td>

                            <?php else: ?>
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0"><?php echo e($tran->amount); ?> USD</h5>
                                        <p class="text-muted mb-0 font-size-12">Main Balance</p>
                                    </div>
                                </td>
                            <?php endif; ?>
                            <?php if($tran->status === 'processing'): ?>
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-warning text-muted mb-0"><?php echo e($tran->status); ?></h5>
                                        <p class="text-muted mb-0 font-size-12"><?php echo e($tran->created_at); ?></p>
                                    </div>
                                </td>
                            <?php elseif($tran->status === 'completed'): ?>
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-success text-muted mb-0"><?php echo e($tran->status); ?></h5>
                                        <p class="text-muted mb-0 font-size-12"><?php echo e($tran->completed_at); ?></p>
                                    </div>
                                </td>
                            <?php elseif($tran->status === 'confirmed'): ?>
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-info text-muted mb-0"><?php echo e($tran->status); ?></h5>
                                        <p class="text-muted mb-0 font-size-12"><?php echo e($tran->confirmed_at); ?></p>
                                    </div>
                                </td>
                            <?php elseif($tran->status === 'canceled'): ?>
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-danger text-muted mb-0"><?php echo e($tran->status); ?></h5>
                                        <p class="text-muted mb-0 font-size-12"><?php echo e($tran->updated_at); ?></p>
                                    </div>
                                </td>
                            <?php endif; ?>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
                <div>
                    <?php echo $trans->render(); ?>

                </div>
            </div>
        </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/transactions/index.blade.php ENDPATH**/ ?>