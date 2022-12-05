<?php $__env->startSection('title', 'Transactions'); ?>

<?php $__env->startSection('content'); ?>

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Transactions</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Transactions</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2">(<?php echo e($trans->count()); ?>)</span> enteries</h5>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__empty_1 = true; $__currentLoopData = $trans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr class="">
                                <td>
                                    <span><?php echo e($tran->tnx_id); ?></span>
                                </td>
                                <td>
                                        <img src="<?php echo e($tran->user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                        <span class="text-body"><?php echo e($tran->user->name); ?></span><br>
                                        <small> <?php echo e($tran->user->email); ?></small>
                                </td>
                                <td>
                                    <?php echo e($tran->total); ?> <br>
                                    <?php if($tran->type === 'deposit'): ?>
                                          <small> Recieving Address: <?php echo e(Str::limit($tran->wallet->wallet_address, $limit = 20, $end = '...')); ?></small>
                                    <?php elseif( $tran->type === 'withdraw'): ?>
                                     <small> WD TO: <?php echo e($tran->wd_wallet->address); ?></small>

                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($tran->currency); ?></td>
                                <td><span class="badge p-1 bg-soft-success text-dark"><?php echo e($tran->type); ?></span></td>
                                <td><?php echo e($tran->created_at->diffForHumans()); ?></td>
                                <td>
                                    <?php if($tran->status  === 'processing'): ?>

                                    <span class="badge p-1 bg-warning">processing</span>

                                    <?php elseif($tran->status  === 'completed'): ?>
                                    <span class="badge p-1 bg-success">completed</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center">
                                <?php if($tran->status  === 'processing'): ?>

                                    <a class="btn btn-soft-success sm" href="<?php echo e(route('admin.tran.approve', $tran->id)); ?>"><?php echo e($tran->type === 'withdraw' ? 'Confirm' : 'Approve'); ?></a>

                                    <?php elseif($tran->status  === 'completed'): ?>
                                    <span class=""><i>complete</i><span>
                                    <?php endif; ?>
                                </td>
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/transactions/index.blade.php ENDPATH**/ ?>