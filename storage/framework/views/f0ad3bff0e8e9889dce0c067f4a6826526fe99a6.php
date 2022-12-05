<?php $__env->startSection('title', 'Wallet'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center text-center">
                        <div class="col-12">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate"><strong>Asset Value</strong></span>
                            <h4 class="mb-3">
                                <span class="counter-value-usd" >...</span>
                            </h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->
    
    
    <div class="row mt-3">
        <div class="col-xl-8">
            <div style="border: none;" class="card">
                

                <div class="card-body px-0">
                    <div class="px-3" data-simplebar style="max-height: 500px;">
                        <ul class="list-unstyled balance-list activity-wid mb-0">

                            <?php $__empty_1 = true; $__currentLoopData = $wallets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wallet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li class="activity-list activity-border" data-crypto="<?php echo e($wallet->crypto->cmc_id); ?>" data-rate="<?php echo e($wallet->crypto->cus_price); ?>">
                                    <div class="activity-icon avatar-md">
                                        <span style="background-color: white ! important;" class="avatar-title">
                                        <img src="<?php echo e($wallet->crypto->image_url); ?>" width="45" alt="">
                                        </span>
                                    </div>
                                    <div class="timeline-list-item">
                                        <div class="d-flex">
                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                <h5 class="font-size-18 mb-1"><?php echo e($wallet->crypto->name); ?></h5>
                                                <p class="text-truncate text-muted font-size-13 crypto-price"> <span class="crypto-rate">...</span> &nbsp;<span class="text-success crypto-price-change">...</span></p>
                                            </div>
                                            <div class="flex-shrink-0 text-end me-3">
                                                <h6 class="mb-1 asset-balance" balance="<?php echo e($wallet->balance); ?>"><?php echo e($wallet->balance); ?> <strong><?php echo e($wallet->crypto->symbol); ?></strong></h6>
                                                <div class="font-size-13 crypto-dollar-value">'''</div>
                                            </div>

                                            <div class="flex-shrink-0 text-end">
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Send</a>
                                                        <a class="dropdown-item" href="#">Receive</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Swap Crypto</h4>
                </div><!-- end card header -->
                <div class="card-body">

                    <div class="float-end ms-2">
                        <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline available-balance">0.00</a></h5>
                    </div>
                    <h5 class="font-size-14 mb-4">Asset Balance</h5>
                    <form method="POST" action="<?php echo e(route('user.swap.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <label>From Asset :</label>
                        <div class="input-group mb-3">
                            <label class="input-group-text">Amount</label>
                            <select id="from-currency" name="from_crypto_balance_id" class="form-select from-select" style="max-width: 100px;">
                                <option  balance-sw="0.00" symbol-sw="" value="" >-- SELECT --</option>
                                <?php $__currentLoopData = $wallet_with_balance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wallet_from): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option symbol-sw="<?php echo e($wallet_from->crypto->symbol); ?>" balance-sw="<?php echo e($wallet_from->balance); ?>" crypto-sw="<?php echo e($wallet_from->crypto->cmc_id); ?>" value="<?php echo e($wallet_from->id); ?>"><?php echo e($wallet_from->crypto->symbol); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <input type="text" name="from_crypto_amount" class="form-control swap-from" placeholder="0.00121255">
                        </div>

                        <div>
                            <label>To Asset :</label>
                            <div class="input-group mb-3">
                                <label class="input-group-text">Amount</label>
                                <select id="to-currency" name="to_crypto_id" class="form-select to-select" style="max-width: 100px;">
                                    <option value="" >-- SELECT --</option>
                                    <?php $__currentLoopData = $cryptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto_to): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php echo e($crypto_to->symbol == 'USDT' ? 'selected' : ' '); ?> to-symbol-sw="<?php echo e($crypto_to->symbol); ?>"  data-rate="<?php echo e($crypto_to->cus_price); ?>" to-crypto-sw="<?php echo e($crypto_to->cmc_id); ?>" value="<?php echo e($crypto_to->id); ?>" ><?php echo e($crypto_to->symbol); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <input disabled type="text" class="form-control swap-to" placeholder="0.00121255">
                            </div>

                            <div class="input-group mb-3">
                                <label class="input-group-text">Exchange Rate - 1 <span class="to-con-symbol"></span>&nbsp; = &nbsp;</label>
                                <input disabled type="text" class="form-control to-exhange-rate" placeholder="$58,245">
                                <label class="input-group-text">$</label>
                            </div>

                        </div>
                        <div hidden class="alert alert-danger alert-dismissible fade show warning-text" role="alert">
                                    <i class="mdi mdi-block-helper me-2"></i>
                                    <span class="alert-message"></span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="text-center d-grid">
                            <button disabled type="submit" class="btn btn-dark submit-btn">Swap Asset</button>
                        </div>
                    </form>

                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div><!-- end row -->

    <script>
        $(document).ready(function () {

            let dollar_rate = 0
            let cryptos = '';
            let crypto_bal = [];
            let total_usd_value = 0;

            let updateCryptoInfo = (data) => {

                // console.log(data);
                $.each(data, function(key,crypto){

                    let current_element = $(".balance-list").find(`[data-crypto='${key}']`);
                    let price = 0;
                    let per_change = 0;

                    let cus_rate  = current_element.attr('data-rate');
                    let percent_change  = current_element.attr('data-percent');

                    if (cus_rate === '') {

                        price = crypto['quote']['USD'];
                        price = price['price'];

                    } else {

                        price = parseFloat(cus_rate);

                    }
                    // console.log(crypto);

                        per_change = crypto['quote']['USD'];
                        per_change = per_change['percent_change_24h'].toFixed(2);


                    if (per_change > 0) {

                        current_element.find('.crypto-price > .crypto-price-change').addClass('text-success');
                    }else{
                       current_element.find('.crypto-price > .crypto-price-change').addClass('text-danger');
                    }


                    let asset_balance = current_element.find('.asset-balance').attr('balance');

                    let balance_usd_value = parseFloat(asset_balance) * price.toFixed(11);

                    total_usd_value += balance_usd_value;

                    if (percent_change === '') {

                        current_element.find('.crypto-price > .crypto-rate').text('$'+price.toFixed(2));
                    }else{

                        current_element.find('.crypto-price > .crypto-rate').text('$'+price.toFixed(3));
                    }

                    if (per_change > 0) {
                        current_element.find('.crypto-price > .crypto-price-change').text('+'+per_change+'%');
                    } else {
                        current_element.find('.crypto-price > .crypto-price-change').text(per_change+'%');
                    }

                    current_element.find('.crypto-dollar-value').text('$'+balance_usd_value.toFixed(2)).digits();


                });

                $('.counter-value-usd').text('$'+total_usd_value.toFixed(2)).digits();

            }

            let getCryptoInfo = (cryptos) => {

                cryptos = cryptos.replace(/,\s*$/, "");
                axios.get('ajax/cmc-proxy-crypto-info/'+cryptos)
                .then(res => {

                    var data = res['data']
                    updateCryptoInfo(data['data'])
                })
                .catch(err => {
                    console.error(err);

                })

            }

            $('.balance-list li').each(function(i){

                cryptos += $(this).attr('data-crypto') + ',';
                crypto_bal.push($(this));

            });

            getCryptoInfo(cryptos);

            //js for swap

            let asset_balance = $("#from-currency option:selected").attr('balance-sw');

            let asset_balance_symbol  = $("#from-currency option:selected").attr('symbol-sw');

            // let to_asset_balance_symbol  = $("#to-currency option:selected").attr('data-symbol');
            let to_crypto_symbol  = $("#to-currency option:selected").attr('to-symbol-sw');

            let cryptos_sw = '';
            let rates = {} ;

            $(".from-select").val("");
            $(".to-select").val("");
            $('.swap-from').val("")

            let from_current_crypto_rate = 0;
            let to_current_crypto_rate = 0;

            let swap_from_amount = $('.swap-from').val();
            let swap_to_amount = $('.swap-to').val();


            $('#to-currency option').each(function(i){
                cryptos_sw += $(this).attr('crypto-sw') + ',';

            });


            let updatebalanceInfo = (balance, symbol) => {

                $('.available-balance').text(balance+' '+symbol)

            }

            let updateToInfo = (rate,symbol) => {

                $('.to-con-symbol').text(symbol)
                $('.to-exhange-rate').val(parseFloat(rate).toFixed(2))
            }

            setTimeout(() => {
                updatebalanceInfo(asset_balance,asset_balance_symbol)
            }, 1000);

            let validateBalance = (amount) =>{

                if(amount > parseFloat(asset_balance)) {

                    $('.submit-btn').attr('disabled',true);
                    $('.alert-message').text('Not enough balance');
                    $('.warning-text').removeAttr('hidden');
                    $('.swap-to').val('')
                } else{

                   $('.submit-btn').removeAttr('disabled');
                   $('.alert-message').text('');
                   $('.warning-text').attr('hidden',true);

                   assetConverta(from_current_crypto_rate,to_current_crypto_rate,swap_from_amount)
                }

            }

            let setRate = (data) => {

                $.each(data, function (key, crypto) {

                    let current_element = $("#to-currency").find(`[to-crypto-sw='${key}']`);
                    let cus_rate = current_element.attr('data-rate');
                    let current_crypto = crypto['symbol']

                    if (cus_rate === '') {

                        let crypto_rate = crypto['quote']['USD']
                        rates[current_crypto] = parseFloat(crypto_rate['price']).toFixed(11)
                    } else{

                        rates[current_crypto] = parseFloat(cus_rate).toFixed(11)
                    }



                });

                setSelectedRate(rates,to_crypto_symbol)
            }

            let getCryptoData = (cryptos_sw) => {

                cryptos_sw = cryptos.replace(/,\s*$/, "");
                axios.get('ajax/cmc-proxy-crypto-info/'+cryptos_sw)
                .then(res => {

                    var data = res['data']
                    setRate(data['data'])

                })
                .catch(err => {
                    console.error(err);

                })

            }

            let setSelectedRate = (rates, to_crypto_symbol) =>{

                $.each(rates, function (key, rate) {

                    if (key === to_crypto_symbol) {

                        to_current_crypto_rate = rate ;
                        return false
                    }

                });

                $.each(rates, function (key, rate) {

                    if (key === asset_balance_symbol) {

                        from_current_crypto_rate = rate ;
                        return false
                    }

                });

                updateToInfo(to_current_crypto_rate,to_crypto_symbol)
            }

            let assetConverta = (from_rate,to_rate, from_amount, to_amount) =>{

                let crypto_conv = 0;
                let to_c_s = '';
                let from_c_s = '';

                crypto_conv = (parseFloat(from_rate) / parseFloat(to_rate)) * parseFloat(from_amount);
                $('.swap-to').val(crypto_conv.toFixed(8))

            }

            let app = () => {

                getCryptoData(cryptos_sw);

            }

            $("#from-currency").change(function (e) {
                e.preventDefault();

                asset_balance = $("#from-currency option:selected").attr('balance-sw');
                asset_balance_symbol  = $("#from-currency option:selected").attr('symbol-sw');
                $('.swap-from').val('')
                $('.swap-to').val('')

                swap_from_amount = '';
                swap_to_amount = '';

                setTimeout(() => {
                    updatebalanceInfo(asset_balance,asset_balance_symbol)
                }, 1000);

                setSelectedRate(rates,to_crypto_symbol)
            });

            $("#to-currency").change(function (e) {
                e.preventDefault();

                // to_asset_balance_symbol  = $("#to-currency option:selected").attr('data-symbol');
                to_crypto_symbol  = $("#to-currency option:selected").attr('to-symbol-sw');
                $('.swap-from').val('')
                $('.swap-to').val('')

                swap_from_amount = '';
                swap_to_amount = '';

                setSelectedRate(rates,to_crypto_symbol)

            });

            $('.swap-from').keyup(function (e) {

                swap_from_amount = $('.swap-from').val();

                if (swap_from_amount.length === 0) {

                    $('.submit-btn').attr('disabled',true);
                }
                if (swap_from_amount > 0) {

                    validateBalance(parseFloat(swap_from_amount));
                    // updateUsdValue(usd_rate,parseFloat(send_amount));
                }else {
                    $('.alert-message').text('Enter an amount greater than 0');
                    $('.send-usd-value').text('~ $0.00');
                    $('.warning-text').removeAttr('hidden');
                    $('.swap-to').val('')
                }

            });



            $('.swap-to').keyup(function (e) {

                swap_to_amount = $('.swap-to').val();

                if (swap_to_amount.length === 0) {

                    $('.submit-btn').attr('disabled',true);
                }
                if (swap_to_amount > 0) {

                    validateBalance(parseFloat(swap_to_amount));
                    // updateUsdValue(usd_rate,parseFloat(send_amount));
                }else {
                    $('.alert-message').text('Enter an amount greater than 0');
                    $('.send-usd-value').text('~ $0.00');
                    $('.warning-text').removeAttr('hidden');
                }

            });

            app()
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/balances/index.blade.php ENDPATH**/ ?>