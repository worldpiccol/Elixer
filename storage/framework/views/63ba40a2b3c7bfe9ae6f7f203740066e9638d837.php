<?php $__env->startSection('title', $scheme->crypto->symbol.'/USDT'); ?>

<?php $__env->startSection('content'); ?>

<div class="row"id="price-data">
    <div class="col-md-12 ">
        <div class="col-md-4 float-end">
            <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/technicals/" rel="noopener" target="_blank"></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
                {
                "interval": "1m",
                "width": "100%",
                "isTransparent": true,
                "height": 510,
                "symbol": "BINANCE:<?php echo e($scheme->crypto->symbol); ?>USDT",
                "showIntervalTabs": true,
                "locale": "en",
                "colorTheme": "light"
                }
                </script>
                </div>
                <!-- TradingView Widget END -->
        </div>
        <div class="col-md-8">

                <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                <div id="tradingview_053d4"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                <script type="text/javascript">
                new TradingView.widget(
                {
                "width": "100%",
                "height": 500,
                "symbol": "BINANCE:<?php echo e($scheme->crypto->symbol); ?>USDT",
                "interval": "1",
                "timezone": "Etc/UTC",
                "theme": "light",
                "style": "2",
                "locale": "en",
                "toolbar_bg": "#f1f3f6",
                "enable_publishing": false,
                "allow_symbol_change": true,
                "container_id": "tradingview_053d4"
                }
                );
                </script>
                </div>
                <!-- TradingView Widget END -->
        </div>

    </div>
</div>
<div style="display:none" class="row" id="trade-view">
    <div class="col-md-12">

        <div class="card">
           <div class="card-header">
            <div class="count-down-time">
                <div class="digits">
                    <span class="minutes">00</span>:<span data-time="" class="seconds">00</span>:<span class="mill-seconds">00</span>
                </div>
            </div>
           </div>
            <div class="card-body">
                <canvas id="tradeChart" width="900" height="400"></canvas>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="row">

    <div class="col-md-8">
        <div class="card border-light">
          <div class="card-body">
           <form action="" method="get">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Min Invest</label>
                        <input type="text"
                            class="form-control form-control-md" name="" value="<?php echo e($scheme->min_amount); ?> USD" placeholder="" disabled>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group mt-1">
                        <label for="">Max Invest</label>
                        <input type="text"
                            class="form-control form-control-md" name="" value="<?php echo e($scheme->max_amount); ?> USD" disabled>
                        <small id="helpId" class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Profit</label>
                            <input type="text"
                                class="form-control form-control-md" name="" value="<?php echo e($scheme->rate); ?>%" disabled>
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                   </div>
                   <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Time</label>
                            <input type="text"
                                class="form-control form-control-md" name="" value="<?php echo e($scheme->terms); ?> <?php echo e($scheme->term_type); ?>" disabled>
                            <small id="helpId" class="form-text text-muted"></small>
                        </div>
                   </div>
                   </div>
                    <div class="form-group mt-1">
                        <label for="">Invest Amount</label>
                        <input type="text"
                            class="form-control form-control-md invest-amount" name="" placeholder="<?php echo e($scheme->min_amount); ?> USD">
                        <small id="helpId" class="form-text font-size-13 text-danger amount-error"></small>
                    </div>
                </div>
            </div>
           </form>
           <div class="row">
                <div class="pt-2">
                    <span class="text-dark fw-bolder">Asset Balance: <?php echo e($balance->balance); ?> <?php echo e($balance->crypto->symbol); ?> <span class="digits">~ <?php echo e(round($wallet_balance_usd_value , 2)); ?> USD</span></span>

                </div>
           </div>
          </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mt-md-4">

            <div class="card-body">
                <div class="d-grid">
                    <button disabled href="" class="btn btn-success btn-buy">Buy / Long</button>
               </div>
               <div class="d-grid mt-3">
                    <button disabled href="" class="btn btn-danger btn-sell">Sell / Short</button>
               </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {

        let invest_amount = $('.invest-amount').val();
        let usd_balance = "<?php echo e($wallet_balance_usd_value); ?>";
        let min_invest = "<?php echo e($scheme->min_amount); ?>";
        let max_invest = "<?php echo e($scheme->max_amount); ?>";
        let crypto = "<?php echo e($scheme->crypto->cmc_id); ?>";
        let scheme_time = "<?php echo e($scheme->terms); ?>";
        let scheme_time_type = "<?php echo e($scheme->term_typ); ?>";
        let scheme_outcome = "win";
        let trade_outcome;
        let trade_time;
        let ellapsed_time = 0;
        alertify.set('notifier','position', 'top-right');

    //    $(document).on('click', function () {

    //         $(document).trigger('stopCountDown');
    //    });

        let tradeDecider = (chart, user_decision) => {

            let score = false;
            let data =chart.data.datasets[0].data
            let open_price =  data[0]
            let close_price = data[data.length - 1]
            alertify.set('notifier','position', 'top-right');

            console.log(open_price+' - '+close_price);

            if (user_decision === 'buy') {

                if (close_price < open_price){

                    score = false
                }else{

                    score = true
                }

            }

            if (user_decision === 'sell') {

                if (close_price > open_price){

                    score = false
                }else{

                    score = true
                }
            }

            if (score == true) {

                alertify.success('Trade Won!');
            }else{
                alertify.error('Trade Failed!');
            }

            let outcome = score == true ? 'win':'fail';
            let amount = $('.invest-amount').val();

            axios.get(`<?php echo e(url('ajax/store-trade')); ?>/<?php echo e($scheme->id); ?>/${outcome}/${amount}/${open_price}/${close_price}`)
            .then(res => {
                if (res.data === 'logged') {
                    location.reload();
                }
            })
            .catch(err => {
                console.error(err);
            })
        }

        var ctx = document.getElementById('tradeChart');
        var ctx = document.getElementById('tradeChart').getContext('2d'); // 2d context
        var ctx = $('#tradeChart'); // jQuery instance
        var ctx = 'tradeChart'; // element id

        let user_decision;

        if (scheme_time_type === 'min') {
            trade_time = parseInt(scheme_time) * 60;
        }else{

            trade_time = parseInt(scheme_time)
        }

       function setResetListener() {

            const resetListener = () => {
                if (ellapsed_time == trade_time) {

                    $(document).trigger('stopCountDown');
                    $(document).trigger('resetCountDown');

                    tradeDecider(tradeChart ,user_decision)
                    setTimeout(() => {

                        $('#price-data').toggle('slow')
                        $('#trade-view').toggle('slow')
                        $('.invest-amount').removeAttr('disabled')
                    }, 5000);

                    ellapsed_time = 0
                }
                return setTimeout(resetListener, 250);
            };
            resetListener();
       }

       setResetListener();

        $('.btn-buy').click(function (e) {
            e.preventDefault();

            user_decision = 'buy'

            switch (scheme_outcome) {
                case 'fail':
                        trade_outcome = 'sell'
                    break;
                    case 'win':
                        trade_outcome = 'buy'
                    break;

                default:
                    break;

            }

            getRate(crypto)
            $('.btn-sell').attr('disabled', true)
            $('.btn-buy').attr('disabled', true)
            $('.invest-amount').attr('disabled',true)
            $('#price-data').toggle('slow')
            $('#trade-view').toggle('slow')

        });

        $('.btn-sell').click(function (e) {
            e.preventDefault();

            user_decision = 'sell'

            switch (scheme_outcome) {
                case 'fail':
                        trade_outcome = 'buy'
                    break;
                    case 'win':
                        trade_outcome = 'sell'
                    break;

                default:
                    break;
            }

            console.log(trade_outcome);
            getRate(crypto)

            $('.btn-sell').attr('disabled', true)
            $('.btn-buy').attr('disabled', true)
            $('.invest-amount').attr('disabled',true)
            $('#price-data').toggle('slow')
            $('#trade-view').toggle('slow')
        });

        var tradeChart = new Chart (ctx, {

            type: 'line',

            data: {

                labels: [],
                datasets: [{
                    label: "<?php echo e($scheme->crypto->symbol); ?>/USDT",
                    fill: true,
                    backgroundColor: 'rgb(218 217 222 / 55%)',
                    borderColor: 'rgb(143 143 145)',
                    data: [],
                }]
            }
    });

       let randPrice = (current_price) => {

            let per_ranges = [0.1,0.09,0.08,0.07,0.06,0.05,0.04,0.03,0.02,0.001,0.003,0.003,0.004,0.005,0.006]
            let per = per_ranges[Math.floor(Math.random()*per_ranges.length)]

            let max = ((parseFloat(per)/100) * parseFloat(current_price)) + parseFloat(current_price)
            let min = parseFloat(current_price) - ( (parseFloat(per)/100) * parseFloat(current_price))

            var random =  Math.random() * (max - min) + min

            return random

       }


       let countdown = (chart, data) =>{

            const getMillSecs = document.querySelector(".mill-seconds");
            const getSeconds = document.querySelector(".seconds");
            const getMinutes = document.querySelector(".minutes");

            let milli = 00;
            let seconds = 00;
            let minutes = 00;
            let interval;

            $(document).on('startCountDown', function(e, eventInfo) {

                clearInterval(interval);
                interval = setInterval(startTime, 10);

            });

            $(document).on('stopCountDown', function(e, eventInfo) {

                clearInterval(interval);
            });

            $(document).on('resetCountDown', function(e, eventInfo) {

                clearInterval(interval);
                let milli = 00;
                let seconds = 00;
                let minutes = 00;
                getMillSecs.innerText = "00";
                getSeconds.innerText = "00";
                getMinutes.innerText = "00";
            });

            // var today = new Date();
            // var dd = String(today.getDate()).padStart(2, '0');
            // var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
            // var yyyy = today.getFullYear();

            // today = mm + '/' + dd + '/' + yyyy;
            let current = 0;

            startTime = () => {
            milli++;
            if (milli <= 9) {
                getMillSecs.innerText = "0" + milli;
            }
            if (milli > 9) {
                getMillSecs.innerText = milli;
            }
            if (milli > 99) {
                seconds++;
                getSeconds.innerText = "0" + seconds;
                milli = 0;
                getMillSecs.innerText = "0" + 0;

                let price = data

                let current_time = `${seconds} Secs`


                    chart.data.labels.push(current_time);
                    chart.data.datasets[0].data.push(price[current])
                    chart.update();
                    console.log( price[current]);
                    current++
                    ellapsed_time++
                    console.log(ellapsed_time);

            }
            if (seconds > 9) {
                getSeconds.innerText = seconds;
            }
            if (seconds > 59) {
                minutes++;
                getMinutes.innerText = "0" + minutes;
                seconds = 0;
                getSeconds.innerText = "0" + 0;
            }
            if (minutes > 9) {
                getMinutes.innerText = minutes;
            }
            };


       }

       let tradeMaker = (data) => {

       }

       let pricesGenerator = (current_price, time) => {

            // let time = 60
            let break_periods = [2,3,4,5,6,7,8]
            var break_time = break_periods[Math.floor(Math.random()*break_periods.length)];
            let stop_times = [];
            data = [];
            data.push(current_price)

            console.log(break_time);
            for (let i = 0; i < break_time+1; i++) {
                t = time - (break_time - i)
                stop_times.push(t);
            }

           setTimeout(() => {

                for (let i = 1; i < time; i++) {

                    let new_price = randPrice(current_price)

                    if (stop_times.includes(i)) {

                        switch (trade_outcome) {
                            case 'buy':
                                    if ( new_price <= parseFloat(current_price)) {

                                        i--;
                                    }else{

                                        data.push(new_price)
                                    }

                                break;
                            case 'sell':

                                    if ( new_price >= parseFloat(current_price)) {

                                        i--;
                                    }else{

                                        data.push(new_price)
                                    }

                                    break;
                            default:

                                break;
                        }

                    }else{

                    data.push(new_price)

                    }

            }

           }, 1000);

           setTimeout(() => {

            // console.log(data);
            let amount = $('.invest-amount').val();
            axios.get(`<?php echo e(url('ajax/debit-account')); ?>/<?php echo e($scheme->id); ?>/${amount}`)
            .then(res => {

                if (res.data === 'debited') {

                    countdown(tradeChart,data);
                    setTimeout(() => {
                        $(document).trigger('startCountDown');
                        console.log('started');
                    }, 500);

                }else{

                    alertify.error('We could not debit your wallet, check your balance and try again.');
                    $('#price-data').toggle('slow')
                    $('#trade-view').toggle('slow')
                }
            })
            .catch(err => {
                console.error(err);
            })

           }, 500);
       }
        let getRate = (crypto) =>{

            axios.get("<?php echo e(route('get.crypto', ['cryptos' => $scheme->crypto->cmc_id])); ?>")
            .then(res => {

                var data = res['data'];
                    data = data['data'][`${crypto}`]['quote'];

                var   ex_rate = data['USD'],
                        ex_rate = parseFloat(ex_rate['price'].toFixed(11))
                    // setRate(ex_rate)
                   pricesGenerator(ex_rate,trade_time);
            })
            .catch(err => {
                console.error(err);

            })

        }

        let checkBalance = (balance,amount) =>{

            if ( parseFloat(amount) > parseFloat(balance)) {

                $('.btn-buy').attr('disabled', true)
                $('.btn-sell').attr('disabled', true)
                $('.amount-error').text('Not enough balance')

                return false

            }else{

                $('.btn-buy').removeAttr('disabled')
                $('.btn-sell').removeAttr('disabled')
                $('.amount-error').text('')
                return true

            }
        }

        let checkInvestRange = (amount,max_invest,min_invest) =>{

            if (parseFloat(amount) >= parseFloat(min_invest) && parseFloat(amount) <= parseFloat(max_invest)) {

                $('.btn-buy').removeAttr('disabled')
                $('.btn-sell').removeAttr('disabled')
                $('.amount-error').text('')
                // pricesGenerator(1450)

                return true

            }else{

                $('.btn-buy').attr('disabled', true)
                $('.btn-sell').attr('disabled', true)
                $('.amount-error').text('Please enter amount between '+min_invest+' USD and '+max_invest+' USD');

                return false

            }
        }

       $('.invest-amount').keyup(function (e) {

            invest_amount = $('.invest-amount').val();

            if (invest_amount.length > 0) {

                checkBalance(usd_balance, invest_amount)
                checkInvestRange(invest_amount,max_invest,min_invest)
            }else{


            }


       });




    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH S:\jobs\bitstocks_trading\resources\views/user/trades/show.blade.php ENDPATH**/ ?>