@extends('user.layouts.app')

@section('title', 'Invest')

@section('content')

    <div class="row mt-5">
        <div class="col-6 offset-md-3">
            <div style="border:none" class="card">
                <div class="border-header font-size-20 fw-bolder mb-3">
                    <strong >Invest in {{ $scheme->name }}</strong>

                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <span class="float-start"> {{ $balance->crypto->name }} <span>Balance : {{ round($balance->balance, 5) }} {{ $balance->crypto->symbol }}</span></span>

                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="pt-3" id="swap-form" method="POST" action="{{ route('user.invest.store', $scheme->id) }}">
                                @csrf

                                <div class="mb-4">
                                    <label for="" class="form-label fw-bolder font-size-18"><strong>Investment Amount</strong></label>
                                    <input style="line-height: 40px !important;" required class="form-control form-control-lg deposit-amount-crypto" placeholder="{{ round($balance->balance, 5) }} {{ $balance->crypto->symbol }}" type="text" name="invest_amount_crypto" id="">
                                </div>
                                <div class="mb-4 d-grid">
                                   <button style="line-height: 30px !important;"  class="btn submit-btn btn-light waves-effect" type="submit"> Invest Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

@endsection
