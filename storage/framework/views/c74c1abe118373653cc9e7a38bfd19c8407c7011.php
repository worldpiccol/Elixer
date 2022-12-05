<?php $__env->startSection('title', 'Deposit'); ?>

<?php $__env->startSection('content'); ?>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Withdraw Funds</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                        <li class="breadcrumb-item active">Withdraw</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="float-end ms-2">
                                <h5 class="font-size-14"><i class="bx bx-wallet text-dark font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline"><span class="available-balance">...</span> <span class="balance-symbol">...</span></a></h5>
                            </div>
                            <form id="swap-form" method="POST" action="<?php echo e(route('user.withraw.store')); ?>">
                                <?php echo csrf_field(); ?>
                                
                                <div id="deposit-crypto" class="mb-4">
                                    <label for="example-text-input" class="form-label">SELECT WALLET:</label>

                                   <select style="line-height: 40px !important;" id="from-currency" name="from_crypto_balance_id" class="form-select crypto-wallet" style="max-width: 100px;">
                                            <option  balance-sw="0.00" symbol-sw="" value="" >-- SELECT --</option>
                                            <?php $__currentLoopData = $crypto_balances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wallet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option symbol-sw="<?php echo e($wallet->crypto->symbol); ?>" balance-sw="<?php echo e($wallet->balance); ?>" crypto-sw="<?php echo e($wallet->crypto->cmc_id); ?>" value="<?php echo e($wallet->id); ?>"><?php echo e($wallet->crypto->symbol); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="example-search-input" class="form-label">AMOUNT <small class="symbol">BTC</small></label>
                                    <input style="line-height: 40px !important;" class="form-control form-control-lg crypto-amount" placeholder="0.00" type="text" name="crypto_amount" id="">
                                    <span hidden class="text-danger crypto-error-message font-size-14"></span>
                                </div>
                                <div hidden class="alert alert-danger alert-dismissible fade show warning-text" role="alert">
                                    <i class="mdi mdi-block-helper me-2"></i>
                                    <span class="alert-message"></span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                 </div>
                                <div class="mb-4 d-grid">
                                   <button style="line-height: 30px !important;"  class="btn submit-btn btn-light waves-effect" type="submit" disabled="true"> Process Withdrawal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->
    <script>
        $(document).ready(function () {

            $('#swap-form').trigger("reset");
            // let depositTo = $('.deposit-to').find(":selected").val();
            let selectedSymbol = $('.crypto-wallet').find(":selected").attr('symbol-sw')
            let selectedBalance = $('.crypto-wallet').find(":selected").attr('balance-sw');

            var usd_rate;
            let deposit_amount = $('.usd-amount').val();
            let main_bal = "0.00";

            $('.crypto-amount').keyup(function (e) {

                // if (depositTo  === 'crypto-wallet') {

                    crypto_balance  = selectedBalance
                    crypto_amount = $('.crypto-amount').val();


                    if ( crypto_amount.length === 0 ) {

                        $('.submit-btn').attr('disabled',true);
                        $('.error-message').text('Enter an amount greater than 0');
                        $('.error-message').removeAttr('hidden');

                    }else{

                        if ( parseFloat(crypto_amount) > parseFloat(crypto_balance)) {

                            $('.submit-btn').attr('disabled',true);
                            $('.crypto-amount').val('');
                            $('.crypto-error-message').text('Please enter amount equal to your available '+selectedSymbol+' balance');
                            $('.crypto-error-message').removeAttr('hidden');
                        }else{

                            $('.submit-btn').removeAttr('disabled');
                            $('.crypto-error-message').text('');
                            $('.crypto-error-message').attr('hidden',true);
                        }


                    }


            });


            $("#from-currency").change(function (e) {
                e.preventDefault();
                selectedSymbol = $('.crypto-wallet').find(":selected").attr('symbol-sw');
                selectedBalance = $('.crypto-wallet').find(":selected").attr('balance-sw');

                $('.available-balance').text(selectedBalance)
                $('.balance-symbol').text(selectedSymbol)
                $('.symbol').text(selectedSymbol)
                $('.crypto-amount').attr('placeholder', selectedBalance)
                $('.crypto-error-message').text('');
                $('.crypto-error-message').attr('hidden',true);
            });

            //exchange
            let asset_balance = "0.00";
            let asset_balance_symbol  = "USD";

            // let to_asset_balance_symbol  = $("#to-currency option:selected").attr('data-symbol');
            let to_crypto_symbol  = "BTC";

            let crypto= '1';
            var usd_rate;

            $(".crypto-amount").val("");
            $('.usd-amount').val("")

            let crypto_amount = $('.crypto-amount').val();
            let usd_amount = $('.usd-amount').val();

           let getRate = (crypto) =>{

                axios.get('ajax/cmc-proxy-crypto-info/'+crypto)
                .then(res => {

                    var data = res['data'];
                        data = data['data'][`${crypto}`]['quote'];

                    var   ex_rate = data['USD'],
                          ex_rate = parseFloat(ex_rate['price'].toFixed(11))
                        setRate(ex_rate)
                })
                .catch(err => {
                    console.error(err);

                })
            }

            getRate(crypto);

            let setRate = (ex_rate) =>{

                usd_rate = ex_rate;

            }

            let updateUsdValue = (usd_rate, amount) =>{

                let send_usd_value = 0;
                with_value = amount / usd_rate;

                $('.crypto-amount').val(with_value.toFixed(11));

            }

            $('.usd-amount').keyup(function (e) {

                from_amount = $('.usd-amount').val();

                if (from_amount.length === 0 ) {

                    $('.submit-btn').attr('disabled',true);
                    $('#swap-form').trigger("reset");
                    $('.error-message').text('Enter an amount greater than 0');
                    $('.error-message').removeAttr('hidden');

                }else{

                    if (parseFloat(from_amount) < 100 ) {

                        $('.submit-btn').attr('disabled',true);
                        $('.crypto-amount').val('');
                        $('.error-message').text('The minimum withdrawal amount is 100 USD');
                        $('.error-message').removeAttr('hidden');

                    }else{


                        if ( parseFloat(from_amount) > parseFloat(asset_balance)) {

                            $('.submit-btn').attr('disabled',true);
                            $('.crypto-amount').val('');
                            $('.error-message').text('Please enter amount equal to your available balance.');
                            $('.error-message').removeAttr('hidden');
                        }else{

                            updateUsdValue(usd_rate,parseFloat(from_amount));
                            $('.submit-btn').removeAttr('disabled');
                            $('.error-message').text('');
                            $('.error-message').attr('hidden',true);
                        }

                    }


                }



            });

        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/transactions/withdraw.blade.php ENDPATH**/ ?>