<?php $__env->startSection('title', 'Create Investment Scheme'); ?>;

<?php $__env->startSection('content'); ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Create Investment Scheme</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Cryptos</a></li>
                    <li class="breadcrumb-item active">Create Crypto Scheme</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mt-4">

            <div class="card-body">
                <div>
                    <h5 class="card-title mb-4">Create new scheme</h5>
                    <form id="" method="post" action="<?php echo e(route('admin.iv.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md- crypto-select">
                                <div class="form-group mb-3">
                                    <label>Select Crypto</label>
                                    <select class="form-control" name="crypto_id" id="" required>

                                        <?php $__currentLoopData = $cryptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <option value="<?php echo e($crypto->id); ?>">- <?php echo e($crypto->name); ?> (<?php echo e($crypto->symbol); ?>)</option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" required name="name" class="form-control" placeholder="Scheme Name" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Min Ammout <small>(USD)</small></label>
                                    <input type="text" name="min_amount" class="form-control" placeholder="Min Invest Amount" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Max Ammout <small>(USD)</small> <small class="text-info"><i>- Leave empty for unlimited</i></small></label>
                                    <input type="text" name="max_amount" class="form-control" placeholder="Max Invest Amount"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Term Duration</label>
                                    <input type="text" name="terms" required class="form-control"  placeholder="Investment Term"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Terms Type</label>

                                      <select class="form-control" name="term_type" id="" required>
                                        <option value="hours">HOURS</option>
                                        <option value="days">DAYS</option>
                                        <option value="weeks">WEEKS</option>
                                        <option value="months">MONTHS</option>
                                        <option value="years">YEARS</option>
                                      </select>

                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Rate</label>
                                    <input type="text" id="pwd" name="rate" class="form-control" placeholder="Profit Rate" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Rate Type</label>
                                    <select class="form-control" name="rate_type" id="" required>
                                        <option value="percent">Percent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Interest Period</label>
                                    <select class="form-control" name="calc_period" id="" required>
                                        <option value="hourly">HOURLY</option>
                                        <option value="daily">DAILY</option>
                                        <option value="weekly">WEEKLY</option>
                                        <option value="monthly">MONTHLY</option>
                                        <option value="yearly">YEARLY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Payout Term</label>
                                    <select class="form-control" name="payout" id="" required>
                                        <option value="after-mature">After Mature</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Description - <small><i>optional</i></small></label>
                                   <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="form-group">
                            <button  type="submit" class="btn btn-light">Add Crypto</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/admin/iv_schemes/create.blade.php ENDPATH**/ ?>