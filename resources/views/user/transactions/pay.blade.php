@extends('user.layouts.app')

@section('title', 'Complete Deposit')

@section('content')
<style>
    .imaged{
        box-shadow: rgba(0, 0, 0, 0.05) 0px 6px 24px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px;
        padding: 8px;
        border-radius: 10px;
    }
</style>
    <div class="row mt-5">
        <div class="col-6 offset-md-3">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Complete Deposit</h4>
                    <div class="flex-shrink-0 align-self-end">
                        <span class="">Ref: {{ $tnx->tnx_id }}</span>
                    </div>
                </div>
                <div class="card-body p-4">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class=" mt-5 mb-5">
                                <div class="mb-3 ">

                                    <div class="">
                                        <div id="qrcode"></div>
                                        <br>
                                        <span style="" class="d-flex justify-content-center font-size-15">{{ $tnx->wallet->wallet_address }}</span>
                                        <span class="d-flex justify-content-center font-size-15"><strong>{{ number_format((float)$tnx->amount, 5, '.', '')}} {{ $tnx->currency }}</strong></span>
                                        <span class="">
                                            <input hidden type="text" id="tnx-address" value="">
                                        </span>
                                    </div>
                                </div>
                                <h4 class="mb-2 text-center">Scan the QR Code</h4>
                                <p style="font-size:15px;" class="text-center">
                                   Send only <strong> {{ $tnx->crypto->symbol }} ({{ $tnx->wallet->platform }}) </strong> to this wallet address. Sending any other coins may result in permanent loss.
                                </p>
                            </div>
                            <div class="mb-4 d-grid">
                                <a href="{{ route('user.deposit.confirm',$tnx->id) }}" class="btn submit-btn btn-light waves-effect">Made Payment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <!-- end row -->

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<script>
    $(document).ready(function () {

        var qrcode = new QRCode(document.getElementById("qrcode"), {
            text: "{{ $tnx->wallet->wallet_address }}",
            width: 120,
            height: 120,
            colorDark : "#14171a",
            colorLight : "#ffffff",
            correctLevel : QRCode.CorrectLevel.H
        });

        $("#qrcode > img").addClass('imaged square w140 qr-code-img');
        $('.qr-code-img').css('margin-left', 'auto');
        $('.qr-code-img').css('margin-right', 'auto');

    });
</script>
@endsection
