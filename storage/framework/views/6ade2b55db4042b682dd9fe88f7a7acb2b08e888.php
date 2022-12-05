<?php $__env->startSection('title', 'Binary Trades'); ?>

<?php $__env->startSection('content'); ?>

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Binary Trade Log</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2"><?php echo e($trades->count()); ?></span> enteries.</h5>
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
                            <th>Trade ID</th>
                            <th>User</th>
                            <th>Pair</th>
                            <th>Outcome</th>
                            <th>Start Price</th>
                            <th>End Price</th>
                            <th>Duration</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__empty_1 = true; $__currentLoopData = $trades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="">

                            <td><?php echo e($trade->trd_id); ?></td>
                             <td>
                                    <img src="<?php echo e($trade->user->avarta); ?>" alt="" class="avatar-sm rounded-circle me-2">
                                    <span class="text-body"><?php echo e($trade->user->name); ?></span><br>
                                    <small> <?php echo e($trade->user->email); ?></small>
                                </td>
                            <td>
                               <strong><?php echo e($trade->pair); ?></strong>
                            </td>

                            <td class="text-center">
                                <?php if($trade->trade_outcome === 'win'): ?>
                                    <span class="badge bg-soft-success text-dark">Win</span> <br>
                                    <strong><?php echo e(round($trade->profit, 6)); ?> <?php echo e($trade->crypto->symbol); ?></strong>
                                <?php endif; ?>

                                <?php if($trade->trade_outcome === 'fail'): ?>
                                    <span class="badge bg-soft-danger text-dark">Fail</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($trade->start_price); ?></td>
                            <td><?php echo e($trade->end_price); ?></td>
                            <td><?php echo e($trade->term); ?> <?php echo e($trade->term_type); ?><span></span></td>
                            <td><?php echo e($trade->created_at->diffForHumans()); ?></td>
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

<!-- end table responsive -->
  <!-- init js -->
        <script>
            $(document).ready(function () { $('.datatable').DataTable(); });
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/binary/index.blade.php ENDPATH**/ ?>