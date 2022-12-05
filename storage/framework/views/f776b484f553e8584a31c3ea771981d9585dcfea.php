<?php $__env->startSection('title', 'Binary Trade Schemes'); ?>

<?php $__env->startSection('content'); ?>

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Binary Schemes</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title"><small>Total <span class="text-muted fw-normal "><?php echo e($schemes->count()); ?></span> enteries.</small></h5>
        </div>
    </div>
</div>
<!-- end row -->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <div class="mb-4">
                            <a href="<?php echo e(route('admin.binary.create')); ?>" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i> Add Scheme</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="table-responsive">
                    <table class="table align-middle datatable-2 dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr class="bg-transparent">
                                <th>Crypto Pair</th>
                                <th>Tittle</th>
                                <th>Rate <small>%</small></th>
                                <th>Min <small>Invest</small></th>
                                <th>Max <small>Invest</small></th>
                                <th>Term</th>
                                <th>Term <small>Type</small></th>
                                <th>Trade <small>Outcome</small></th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $__empty_1 = true; $__currentLoopData = $schemes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scheme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium"><?php echo e(Str::upper($scheme->slug)); ?></a> </td>
                                    <td>
                                        <?php echo e($scheme->name); ?>

                                    </td>
                                    <td><?php echo e($scheme->rate); ?></td>

                                    <td>
                                        <?php echo e($scheme->min_amount); ?> <small>USD</small>
                                    </td>
                                    <td>
                                        <?php if($scheme->max_amount == 0): ?>
                                            Unlimited
                                        <?php else: ?>
                                            <?php echo e($scheme->max_amount); ?> <small>USD</small>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php echo e($scheme->terms); ?>

                                    </td>
                                    <td>
                                        <?php echo e($scheme->term_type); ?>

                                    </td>
                                    <td>
                                        <?php if($scheme->outcome === 'win'): ?>
                                            <div class="badge badge-soft-success font-size-12">WIN <small>Trade</small></div>
                                        <?php elseif($scheme->outcome === 'fail'): ?>
                                            <div class="badge badge-soft-danger font-size-12">FAIL <small>Trade</small></div>
                                        <?php else: ?>
                                            <div class="badge badge-soft-warning font-size-12">RANDOM <small>Random outcome</small></div>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($scheme->status === 'active'): ?>
                                            <div class="badge badge-soft-success font-size-12">Active</div>
                                        <?php else: ?>
                                            <div class="badge badge-soft-danger font-size-12">Inactive</div>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="<?php echo e(route('admin.binary.edit', $scheme->id)); ?>">Edit Scheme</a></li>
                                                <li><a class="dropdown-item" href="<?php echo e(route('admin.binary.status', $scheme->id)); ?>"><?php echo e($scheme->status === 'active' ? 'Mark Inactive' : 'Mark Active'); ?></a></li>
                                                <li><a class="dropdown-item" href="<?php echo e(route('admin.binary.delete', $scheme->id)); ?>">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
                <!-- end table responsive -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->


<script>
    $(document).ready(function () { $('.datatable-2').DataTable(); });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/bi_schemes/index.blade.php ENDPATH**/ ?>