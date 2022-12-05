@extends('user.layouts.app')

@section('title', 'Options Account')

@section('content')

        <div class=" pt-0">
        <div class="col-md-12">

            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
            "symbols": [
                {
                "proName": "BITSTAMP:BTCUSD",
                "title": "Bitcoin"
                },
                {
                "proName": "BITSTAMP:ETHUSD",
                "title": "Ethereum"
                },
                {
                "description": "",
                "proName": "BINANCE:DOGEUSDT"
                },
                {
                "description": "",
                "proName": "BINANCE:LUNCBUSD"
                },
                {
                "description": "",
                "proName": "BINANCE:BNBUSDT"
                },
                {
                "description": "",
                "proName": "BINANCE:MATICUSDT"
                },
                {
                "description": "",
                "proName": "BINANCE:XRPUSDT"
                },
                {
                "description": "",
                "proName": "BINANCE:SOLUSDT"
                },
                {
                "description": "",
                "proName": "BINANCE:SHIBUSDT"
                },
                {
                "description": "",
                "proName": "BINANCE:LUNAUSDT"
                }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": true,
            "displayMode": "adaptive",
            "locale": "en"
            }
            </script>
            </div>
            <!-- TradingView Widget END -->

        </div>
    </div>

     <div class="row mt-5">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Markets</h4>
                </div><!-- end card header -->

                <div class="card-body ">

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">

                            <thead>
                                <tr>
                                    <th>Pair</th>
                                    <th>Profits</th>
                                    <th>Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               @forelse ($schemes as $item)
                                <tr class="text-center">
                                    <td style="width: 100px !important;">
                                        <div style="height: 90px; overflow:hidden;">
                                           <!-- TradingView Widget BEGIN -->
                                                <div class="tradingview-widget-container">
                                                <div class="tradingview-widget-container__widget"></div>
                                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/?exchange=BINANCE" rel="noopener" target="_blank"></div>
                                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
                                                {
                                                "symbol": "BINANCE:{{ $item->crypto->symbol }}USDT",
                                                "width": "350",
                                                "colorTheme": "light",
                                                "isTransparent": true,
                                                "locale": "en"
                                                }
                                                </script>
                                                </div>
                                                <!-- TradingView Widget END -->
                                        </div>
                                    </td>
                                    <td class="align-middle font-size-20 text-dark fw-bolder">{{ $item->rate }}<small>%</small></td>
                                    <td class="align-middle font-size-20 text-dark fw-bolder">{{ $item->terms }}<small>{{ $item->term_type }}</small></td>
                                    <td class="align-middle font-size-20"><a class="btn btn-light" href="{{ route('user.trades.show', ['trade' => $item->id, 'slug' => $item->slug]) }}">Trade</a></td>
                                </tr>
                               @empty

                               @endforelse
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

    <div class="row mt-5">

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Latest Trades</h4>
                    <div class="flex-shrink-0">
                        <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                                    All
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#transactions-buy-tab" role="tab">
                                    Wins
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab" role="tab">
                                    Fails
                                </a>
                            </li>
                        </ul>
                        <!-- end nav tabs -->
                    </div>
                </div><!-- end card header -->

                <div class="card-body px-0">
                    <div class="tab-content">
                        <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                            <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                <table class="table align-middle table-nowrap table-borderless">
                                    <tbody>

                                        @forelse ($trades as $trade)

                                        <tr class="border-bottom">


                                            @if ($trade->trade_outcome === 'fail')

                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-x d-block"></i>
                                                    </div>
                                                </td>
                                            @elseif ($trade->trade_outcome === 'win')
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-check d-block"></i>
                                                    </div>
                                                </td>
                                            @endif

                                            <td>
                                                <div>
                                                    <h5 class="font-size-14 mb-1">{{ $trade->pair }}</h5>
                                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: {{ $trade->trd_id }}</span> {{ $trade->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </td>
                                             @if ($trade->trade_outcome === 'fail')
                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0 text-center"><span class="badge p-1 bg-soft-danger text-dark">Fail</span></h5>
                                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                                    </div>
                                                </td>
                                            @elseif ($trade->trade_outcome === 'win')
                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0 text-center"><span class="badge p-1 bg-soft-success text-dark">Won</span></h5>
                                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                                    </div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 mb-0">{{ round($trade->profit, 5) }} {{ $trade->crypto->symbol }}</h5>
                                                    <p class="text-muted mb-0 font-size-12">Profit</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 text-muted mb-0">{{ round($trade->capital, 5) }} {{ $trade->crypto->symbol }}</h5>
                                                    <p class="text-muted mb-0 font-size-12">Investment</p>
                                                </div>
                                            </td>

                                        </tr>

                                        @empty

                                        <tr>
                                            <td colspan="12">You haven't made any trades yet</td>
                                        </tr>

                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end tab pane -->
                        <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                            <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                <table class="table align-middle table-nowrap table-borderless">
                                    <tbody>


                                        @forelse ($won_trades as $trade)

                                        <tr>


                                            @if ($trade->trade_outcome === 'fail')

                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-x d-block"></i>
                                                    </div>
                                                </td>
                                            @elseif ($trade->trade_outcome === 'win')
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-check d-block"></i>
                                                    </div>
                                                </td>
                                            @endif

                                            <td>
                                                <div>
                                                    <h5 class="font-size-14 mb-1">{{ $trade->pair }}</h5>
                                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: {{ $trade->trd_id }}</span> {{ $trade->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </td>
                                             @if ($trade->trade_outcome === 'fail')
                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0 text-center"><span class="badge p-1 bg-soft-danger text-dark">Fail</span></h5>
                                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                                    </div>
                                                </td>
                                            @elseif ($trade->trade_outcome === 'win')
                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0 text-center"><span class="badge p-1 bg-soft-success text-dark">Won</span></h5>
                                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                                    </div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 mb-0">{{ round($trade->profit, 5) }} {{ $trade->crypto->symbol }}</h5>
                                                    <p class="text-muted mb-0 font-size-12">Profit</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 text-muted mb-0">{{ round($trade->capital, 5) }} {{ $trade->crypto->symbol }}</h5>
                                                    <p class="text-muted mb-0 font-size-12">Investment</p>
                                                </div>
                                            </td>

                                        </tr>

                                        @empty
                                        <tr>
                                            <td colspan="12">You haven't made any trades yet</td>
                                        </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end tab pane -->
                        <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                            <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                <table class="table align-middle table-nowrap table-borderless">
                                    <tbody>


                                        @forelse ($fail_trades as $trade)

                                        <tr>


                                            @if ($trade->trade_outcome === 'fail')

                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-danger">
                                                        <i class="bx bx-x d-block"></i>
                                                    </div>
                                                </td>
                                            @elseif ($trade->trade_outcome === 'win')
                                                <td style="width: 50px;">
                                                    <div class="font-size-22 text-success">
                                                        <i class="bx bx-check d-block"></i>
                                                    </div>
                                                </td>
                                            @endif

                                            <td>
                                                <div>
                                                    <h5 class="font-size-14 mb-1">{{ $trade->pair }}</h5>
                                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: {{ $trade->trd_id }}</span> {{ $trade->updated_at->diffForHumans() }}</p>
                                                </div>
                                            </td>
                                             @if ($trade->trade_outcome === 'fail')
                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 mb-0 text-center"><span class="badge p-1 bg-soft-danger text-dark">Fail</span></h5>
                                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                                    </div>
                                                </td>
                                            @elseif ($trade->trade_outcome === 'win')
                                                <td>
                                                    <div class="text-end">
                                                        <h5 class="font-size-14 text-muted mb-0 text-center"><span class="badge p-1 bg-soft-success text-dark">Won</span></h5>
                                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                                    </div>
                                                </td>
                                            @endif
                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 mb-0">{{ round($trade->profit, 5) }} {{ $trade->crypto->symbol }}</h5>
                                                    <p class="text-muted mb-0 font-size-12">Profit</p>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="text-end">
                                                    <h5 class="font-size-14 text-muted mb-0">{{ round($trade->capital, 5) }} {{ $trade->crypto->symbol }}</h5>
                                                    <p class="text-muted mb-0 font-size-12">Investment</p>
                                                </div>
                                            </td>

                                        </tr>

                                        @empty
                                        <tr>
                                            <td colspan="12">You haven't made any trades yet</td>
                                        </tr>
                                        @endforelse


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

        <!-- end col -->
    </div><!-- end row -->

@endsection
