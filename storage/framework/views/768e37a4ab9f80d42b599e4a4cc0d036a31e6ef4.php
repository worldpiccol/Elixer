<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Hello, <span class="text-muted"><?php echo e(Auth::user()->name); ?></span></h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mt-3">
        <div class="col-md-4">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Assets Value</span>
                            <h4 class="mb-2">
                                $<span class="asset-value">...</span>
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="text-nowrap">
                        <span class=""><a href="<?php echo e(route('user.deposit.create')); ?>" class="btn btn-soft-success btn-sm">Deposit funds <i class="mdi mdi-arrow-right ms-1"></i></a></span>
                        <span class="ms-2"><a href="<?php echo e(route('user.withdraw.create')); ?>" class="btn btn-soft-warning btn-sm">Withdraw <i class="mdi mdi-arrow-right ms-1"></i></a></span>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-md-4">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Staked Assets Value</span>
                            <h4 class="mb-2">
                                $<span class="asset-value-iv">...</span>
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="text-nowrap">
                        <span class=""> <span class=""><a href="<?php echo e(route('user.invest.crypto')); ?>" class="btn btn-soft-primary btn-sm">Investments<i class="mdi mdi-arrow-right ms-1"></i></a></span></span>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->
        <div class="col-md-4">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Referrals</span>
                            <h4 class="mb-2">
                                <span class="counter-value" data-target="<?php echo e(Auth::user()->referrals->count()); ?>">0</span>
                            </h4>
                        </div>
                    </div>
                    <hr>
                    <div class="text-nowrap">
                        <span class=""> <span class=""><a href="<?php echo e(route('user.referrals')); ?>" class="btn btn-secondary btn-sm">Referrals <i class="mdi mdi-arrow-right ms-1"></i></a></span></span>

                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->
    <div class="row">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Latest Transactions</h4>
                </div><!-- end card header -->

                <div class="card-body px-0">

                    <div class="table-responsive px-3" data-simplebar style="max-height: 400px;">
                        <table class="table align-middle table-nowrap table-borderless">
                            <tbody>

                                <?php $__empty_1 = true; $__currentLoopData = $latest_transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                                        <?php elseif($tran->type ==='rewards' OR $tran->type ==='bonus'): ?>
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


                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 mb-0"><?php echo e(round($tran->amount, 6)); ?> <?php echo e($tran->crypto->symbol); ?></h5>
                                                    <p class="text-muted mb-0 font-size-12"> <?php echo e($tran->crypto->symbol); ?> Wallet</p>
                                                </div>
                                            </td>

                                        <?php if($tran->status === 'processing'): ?>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 badge bg-soft-warning text-muted mb-0"><?php echo e($tran->status); ?></h5>
                                                    <p class="text-muted mb-0 font-size-12"></p>
                                                </div>
                                            </td>
                                        <?php elseif($tran->status === 'completed'): ?>
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 badge bg-soft-success text-muted mb-0"><?php echo e($tran->status); ?></h5>
                                                    <p class="text-muted mb-0 font-size-12"><?php echo e($tran->completed_at->diffForHumans()); ?></p>
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

        <!-- end col -->
    </div><!-- end row -->

    <script>
        $(document).ready(function () {

            let cryptos = [];
            let asset_value = 0;
            const balances = {};
            const rates = {};
            const iv_balance = [];
            let iv_balance_value = 0;

            let setAssetValue = (rates,balances) => {

                $.each(balances, function (crypto, balance) {

                    $.each(rates, function (r_crypto, rate) {

                        if (crypto === r_crypto) {

                            let value = parseFloat(balance) * parseFloat(rate)

                            asset_value = asset_value + value;
                        }

                    });
                });

                axios.get('ajax/get-user-investments')
                .then(res => {

                    setTimeout(() => {

                        res.data.forEach(b => {

                            $.each(rates, function (r_crypto, rate) {

                            if (b.currency === r_crypto) {

                                let value = parseFloat(b.amount) * parseFloat(rate)

                            iv_balance_value = iv_balance_value + value;

                            }


                        });

                        });

                        $('.asset-value-iv').text(iv_balance_value.toFixed(2)).digits()
                    }, 1500);

                })
                .catch(err => {
                    console.error(err);
                })


                $('.asset-value').text(asset_value.toFixed(2)).digits()
            }

            let setRate = (data) => {

                $.each(data, function (key, crypto) {

                    let current_crypto = crypto['symbol']

                        let crypto_rate = crypto['quote']['USD']
                        rates[current_crypto] = parseFloat(crypto_rate['price']).toFixed(11)

                });

               setAssetValue(rates, balances)
            }

            let getRates = (cryptos) => {

                axios.get('ajax/cmc-proxy-crypto-info/'+cryptos)
                .then(res => {
                    var data = res['data']
                    setRate(data['data'])
                })
                .catch(err => {
                    console.error(err);

                })

            }
            axios.get('ajax/get-user-balances')
            .then(res => {

                res.data.forEach(e => {
                    cryptos.push(e.crypto.cmc_id)
                });

                res.data.forEach(b => {
                    let crypto = b.crypto.symbol
                    balances[`${crypto}`] = b.balance
                });

                setTimeout(() => {

                    getRates(cryptos);

                }, 600);

            })
            .catch(err => {
                console.error(err);
            })


        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsrvud/bit_st/resources/views/user/home.blade.php ENDPATH**/ ?>