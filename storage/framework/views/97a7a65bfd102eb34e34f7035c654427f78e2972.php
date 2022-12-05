<?php $__env->startSection('title', 'Investment'); ?>

<?php $__env->startSection('content'); ?>

<style>
    .list-group-item{
        border:none;
    }
    #iv-guage{
        width: 500px;
        height: 500px;
    }
</style>
   <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-title">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <div class="mb-4">
                                    <span class="logo-txt">Investment / <span class="text-info"> <?php echo e($invest->investScheme->name); ?> - <?php echo e($invest->investScheme->calc_period); ?> <?php echo e($invest->investScheme->rate); ?>% for <?php echo e($invest->investScheme->terms); ?> <?php echo e($invest->investScheme->term_type); ?></span></span>
                                </div>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="mb-4">
                                    <h4 class="float-end font-size-16">Invest ID: INV-<?php echo e($invest->ivx); ?></h4>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-start">
                                            <h3 class=""><?php echo e($invest->amount); ?> <?php echo e($invest->investScheme->crypto->symbol); ?></h3>
                                            <p class="card-text">Invested Capital</p>
                                        </div>
                                        <div class="float-end">

                                            <h3>
                                                <span class="font-size-40 me-3">+</span>
                                                <?php
                                                        $daily_profit = ($invest->rate / 100) * $invest->amount ;
                                                        $net_profit = $daily_profit * $invest->term_total;
                                                ?>
                                                    <?php echo e($net_profit); ?> <?php echo e($invest->investScheme->crypto->symbol); ?>

                                            </h3>
                                            <p class="card-text text-center">Profit (Approx)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                                    <div class="card-body">
                                        <div class="float-start">
                                            <h3 class="">
                                                 <?php
                                                        $daily_p = ($invest->rate / 100) * $invest->amount ;
                                                        $net_p = $daily_profit * $invest->term_total;
                                                        $total = $invest->amount + $net_p;
                                                ?>

                                                <?php echo e($total); ?> <?php echo e($invest->investScheme->crypto->symbol); ?>

                                            </h3>
                                            <p class="card-text">Total Return (inc. cap)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="row">
                        <div class="col-md-6">
                            <ul style="border-top:none !important d-flex" class="list-group">
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start">Term duration </div>
                                    <div class="float-end"><?php echo e($invest->investScheme->terms); ?> <?php echo e($invest->investScheme->term_type); ?></div>
                                </li>
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start">Term Start</div>
                                    <div class="float-end"><?php echo e($invest->term_start->toDayDateTimeString()); ?></div>
                                </li>
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start">Interest(<?php echo e($invest->term_calc); ?> )</div>
                                    <div class="float-end"><?php echo e($invest->rate); ?>%</div>
                                </li>
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start"><?php echo e(Str::ucfirst($invest->term_calc)); ?> Profit </div>
                                    <div class="float-end">
                                       <?php
                                           $profit = ($invest->rate / 100) * $invest->amount
                                       ?>
                                       <?php echo e($profit); ?> <?php echo e($invest->investScheme->crypto->symbol); ?>

                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="text-muted fw-bolder float-start">Profit Adjustment</div>
                                    <div class="float-end"><?php echo e($invest->term_count); ?> / <?php echo e($invest->term_total); ?> times</div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul style="border-top:none !important d-flex" class="list-group">
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start">Term Compute </div>
                                    <div class="float-end"><?php echo e($invest->term_calc); ?> </div>
                                </li>
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start">Total Net Profit</div>
                                    <div class="float-end">
                                         <?php
                                           $daily_profit = ($invest->rate / 100) * $invest->amount ;
                                           $net_profit = $daily_profit * $invest->term_total;
                                       ?>
                                       <?php echo e($net_profit); ?> <?php echo e($invest->investScheme->crypto->symbol); ?>

                                    </div>
                                </li>
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start">Term End</div>
                                    <div class="float-end"><?php echo e($invest->term_end->toDayDateTimeString()); ?></div>
                                </li>
                                <li class="list-group-item border-bottom">
                                    <div class="text-muted fw-bolder float-start">Investment Referrence</div>
                                    <div class="float-end"><?php echo e($invest->ivx); ?></div>
                                </li>
                                <li class="list-group-item">
                                    <div class="text-muted fw-bolder float-start">Investment Status</div>
                                    <div class="float-end">
                                        <?php if($invest->status === 'active'): ?>
                                            <span class="badge bg-soft-warning p-2 text-dark">Active</span>
                                        <?php elseif($invest->status === 'completed'): ?>
                                            <span class="badge bg-soft-success p-2 text-dark">Matured</span>
                                        <?php endif; ?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <hr class="my-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                               <div style="border:none;" class="card">
                                <div class="card-header">
                                    <h4>Invest Completion Rate</h4>
                                </div>
                                <div class="card-body d-flex justify-content-center">
                                   <div id="iv-guage"></div>
                                </div>
                               </div>
                            </div>
                        </div>

                    </div>
                    <div class="py-2 mt-3">
                        <h5 class="font-size-15">Profit Adjustment summary</h5>
                    </div>
                    <div class="p-4 border rounded">
                        <div class="table-responsive">
                            <table class="table table-nowrap align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th style="width: 70px;">No.</th>
                                        <th>Detail</th>
                                        <th>Date</th>
                                        <th class="text-end" style="width: 120px;">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__empty_1 = true; $__currentLoopData = $adjusted_profits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $profit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                    <tr>
                                        <th scope="row"><?php echo e($key+1); ?></th>
                                        <td>
                                            <h5 class="font-size-15 mb-1">Profit Earn - <?php echo e($profit->rate); ?>%</h5>
                                            <p class="font-size-13 badge bg-white mb-0"><?php echo e($profit->payout); ?></p>
                                        </td>
                                        <td><?php echo e($profit->created_at->diffForHumans()); ?></td>
                                        <td class="text-end"><?php echo e($profit->amount); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="12">No Profit Adjustments Yet</td>
                                        </tr>
                                    <?php endif; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $percent = ($invest->term_count / $invest->term_total) * 100/1 ;
        $percent = round($percent,1);
    ?>
    <!-- end row -->
    <!-- echarts js -->
    <script src="<?php echo e(asset('dashboard/assets/libs/echarts/echarts.min.js')); ?>"></script>
    <script>
        $(document).ready(function () {

            let chartDom = document.getElementById('iv-guage');
            let ivChart = echarts.init(chartDom, null, {
                            renderer: 'svg'
                            });
            let option;

            option = {
                series: [
                    {
                    type: 'gauge',
                    progress: {
                        show: true,
                        width: 18
                    },
                    axisLine: {
                        lineStyle: {
                        width: 18
                        }
                    },
                    axisTick: {
                        show: false
                    },
                    splitLine: {
                        length: 15,
                        lineStyle: {
                        width: 2,
                        color: '#999'
                        }
                    },
                    axisLabel: {
                        distance: 25,
                        color: '#999',
                        fontSize: 20
                    },
                    anchor: {
                        show: true,
                        showAbove: true,
                        size: 25,
                        itemStyle: {
                        borderWidth: 10
                        }
                    },
                    title: {
                        show: false
                    },
                    detail: {
                        valueAnimation: true,
                        fontSize: 50,
                        offsetCenter: [0, '70%']
                    },
                    data: [
                        {
                        value: <?php echo e($percent); ?>

                        }
                    ]
                    }
                ]
                };

            ivChart.setOption(option, true);

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/crypto-invest/show.blade.php ENDPATH**/ ?>