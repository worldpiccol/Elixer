<?php $__env->startSection('title', 'Deposit'); ?>

<?php $__env->startSection('content'); ?>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Deposit Funds</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                        <li class="breadcrumb-item active">Deposit</li>
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
                            <form id="swap-form" method="POST" action="<?php echo e(route('user.deposit.store')); ?>">
                                <?php echo csrf_field(); ?>
                                <div id="deposit-crypto" class="mb-4">
                                    <label for="example-text-input" class="form-label">SELECT WALLET:</label>

                                    <select style="line-height: 40px !important;" class="form-control form-control-lg crypto-wallet" name="deposit_to_crypto" id="">
                                       <?php $__currentLoopData = $cryptos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crypto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php echo e($crypto->symbo === 'BTC' ? 'selected':''); ?> data-crypto="<?php echo e($crypto->cmc_id); ?>" data-symbol="<?php echo e($crypto->symbol); ?>" value="<?php echo e($crypto->id); ?>">- <?php echo e(Str::upper($crypto->name)); ?> <span>WALLET</span></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="example-search-input" class="form-label">AMOUNT <small>USD</small> - <small class="text-info"><i>MIN 100 USD</i></small></label>
                                    <input style="line-height: 40px !important;" class="form-control form-control-lg deposit-amount" placeholder="0.00" type="text" name="deposit_amount_usd" id="example-search-input">
                                    <span hidden class="text-danger error-message font-size-14"></span>
                                </div>
                                <div class="mb-4">
                                    <label for="example-search-input" class="form-label">AMOUNT <small class="symbol">BTC</small></label>
                                    <input style="line-height: 40px !important;" class="form-control form-control-lg deposit-amount-crypto" placeholder="0.00" type="text" name="deposit_amount_crypto" id="" disabled>
                                </div>
                                <div class="mb-4 d-grid">
                                   <button style="line-height: 30px !important;"  class="btn submit-btn btn-light waves-effect" type="submit" disabled> Process Deposit</button>
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
            let selectedSymbol = $('.crypto-wallet').find(":selected").attr('data-symbol');
            let crypto = $("#deposit-crypto option:selected").attr('data-crypto');
            var usd_rate;
            let deposit_amount = $('.deposit-amount').val();

            $('.symbol').text('BTC');

                // if (depositTo === 'crypto-wallet') {
                //     $("#deposit-crypto").removeAttr('hidden');
                // }else{
                //     $("#deposit-crypto").attr('hidden', true);
                // }

            // $('.deposit-to').change(function (e) {
            //     e.preventDefault();

            //         depositTo = $('.deposit-to').find(":selected").val();

            //         if (depositTo === 'crypto-wallet') {
            //             $("#deposit-crypto").removeAttr('hidden');
            //             $('.symbol').text(selectedSymbol.toUpperCase());
            //             $('.deposit-amount').val('');
            //             $('.deposit-amount-crypto').val('');
            //             getRate(crypto);

            //         }else{
            //             $("#deposit-crypto").attr('hidden', true);
            //             $('.symbol').text('BTC');
            //         }
            // });

            $('.crypto-wallet').change(function (e) {
                e.preventDefault();

                selectedSymbol = $('.crypto-wallet').find(":selected").attr('data-symbol');
                $('.symbol').text(selectedSymbol.toUpperCase());
                crypto = $("#deposit-crypto option:selected").attr('data-crypto');

                $('.deposit-amount').val('');
                $('.deposit-amount-crypto').val('');
                getRate(crypto);

            });

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
                send_usd_value = amount / usd_rate;

                $('.deposit-amount-crypto').val(send_usd_value.toFixed(11));

            }

            $(".deposit-amount").keyup(function (e) {
                e.preventDefault();

                deposit_amount = $('.deposit-amount').val();

                if (deposit_amount.length === 0) {

                    $('.submit-btn').attr('disabled',true);
                    $('.deposit-amount-crypto').val('');
                    $('.error-message').text('Enter an amount greater than 0');
                    $('.error-message').removeAttr('hidden');
                }
                if (parseFloat(deposit_amount) < 100 ) {

                    $('.submit-btn').attr('disabled',true);
                    $('.deposit-amount-crypto').val('');
                    $('.error-message').text('The minimum deposit amount is 100 USD');
                    $('.error-message').removeAttr('hidden');

                }else{

                    if (parseFloat(deposit_amount ) > 0) {

                        updateUsdValue(usd_rate,parseFloat(deposit_amount));
                        $('.submit-btn').removeAttr('disabled');
                        $('.error-message').text('');
                        $('.error-message').attr('hidden',true);
                    }
                }



            });

            $('#swap-form').on('submit', function() {

                $('.deposit-amount-crypto').removeAttr('disabled');

            });


        });
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bitsrvud/bit_st/resources/views/user/transactions/deposit.blade.php ENDPATH**/ ?>