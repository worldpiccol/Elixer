<?php $__env->startSection('title', 'Referrals'); ?>

<?php $__env->startSection('content'); ?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Referral</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                    <li class="breadcrumb-item active">Referrals</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row align-items-center mt-4">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total enterie <span class="text-muted fw-normal ms-2">(<?php echo e($referrals->count()); ?>)</span></h5>
        </div>
    </div>
</div>
<div class="row align-items-center mt-4">
    <div class="col-md-6 offset-md-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Referral</h4>
                <p class="card-text">Refer your friends and family to our platform and earn huge bonuses.</p>
                <div class="p-2">
                    <input id="refer-link" type="text" class="form-control" value="<?php echo e(Auth::user()->getReferralLinkAttribute()); ?>" placeholder="">
                    <button onclick="copyLink()" class="btn btn-soft-success mt-3">Copy Referral Link</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function copyLink() {

  var copyText = document.getElementById("refer-link");

  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Refferal Link Copied");
}
</script>
<div class="row mt-4">
    <div class="col-md-12">
        <h4>Referrals</h4>
        <div class="table-responsive">
            <table class="table table-striped mb-0">

                <thead>

                </thead>
                <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>
                            <td><?php echo e($item->user->name); ?></td>
                            <td><?php echo e($item->created_at->diffForHumans()); ?></td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr><td colspan="12"> You don't have any referrals yet.</td></tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/referral/index.blade.php ENDPATH**/ ?>