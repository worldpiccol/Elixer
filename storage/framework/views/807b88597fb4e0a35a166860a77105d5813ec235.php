<?php $__env->startSection('title', 'ref_transactions'); ?>

<?php $__env->startSection('content'); ?>

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Referral Bonuses</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">ref_transactions</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2">(<?php echo e($ref_trans->count()); ?>)</span> enteries</h5>
        </div>
    </div>
</div>
<!-- end row -->

<div class="col-xl-12 mt-5">
    <div class="card">
        <div class="card-body px-0">

            <div class="table-responsive px-3">
                <table class="table datatable align-middle table-nowrap table-borderless">
                    <thead>
                        <tr class="">
                            <th>Ref</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Currency</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Desc</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__empty_1 = true; $__currentLoopData = $ref_trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ref_tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="">
                            <td>
                                <span><?php echo e($ref_tran->tnx_id); ?></span>
                            </td>
                            <td>
                                    <img src="<?php echo e($ref_tran->user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                    <span class="text-body"><?php echo e($ref_tran->user->name); ?></span><br>
                                    <small> <?php echo e($ref_tran->user->email); ?></small>
                            </td>
                            <td>
                                <?php echo e($ref_tran->total); ?> <br>
                                <?php if($ref_tran->type === 'deposit'): ?>
                                        <small> Recieving Address: <?php echo e(Str::limit($ref_tran->wallet->wallet_address, $limit = 20, $end = '...')); ?></small>
                                <?php elseif( $ref_tran->type === 'withdraw'): ?>
                                    <small> WD TO: <?php echo e($ref_tran->wd_wallet->address); ?></small>

                                <?php endif; ?>
                            </td>
                            <td><?php echo e($ref_tran->currency); ?></td>
                            <td><span class="badge p-1 bg-soft-success text-dark"><?php echo e($ref_tran->type); ?></span></td>
                            <td><?php echo e($ref_tran->created_at->diffForHumans()); ?></td>
                            <td>
                                <?php if($ref_tran->status  === 'processing'): ?>

                                <span class="badge p-1 bg-warning">processing</span>

                                <?php elseif($ref_tran->status  === 'completed'): ?>
                                <span class="badge p-1 bg-success">completed</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($ref_tran->description); ?></td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <?php endif; ?>

                    </tbody>
                </table>
            </div>

        </div>
        <!-- end card body -->
    </div>
        <!-- end card -->
</div>
    <!-- end col -->

<!-- end table responsive -->
  <!-- init js -->
        <script>
            $(document).ready(function () { $('.datatable').DataTable(); });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/transactions/referral.blade.php ENDPATH**/ ?>