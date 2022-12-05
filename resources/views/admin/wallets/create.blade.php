@extends('admin.layouts.app')

@section('title', 'Add Wallet Address');

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Deposit Wallet Address</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet Addresses</a></li>
                    <li class="breadcrumb-item active">Add Wallet</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mt-4">

            <div class="card-body">
                <div>
                    <h5 class="card-title mb-4">Create wallet</h5>
                    <form id="" method="post" action="{{ route('admin.wallet.store') }}">
                        @csrf
                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Select Crypto</label>
                                    <select class="form-control" name="crypto_id" id="" required>
                                        <option value="">-- SELECT CRYPTO --</option>
                                        @foreach ($cryptos as $crypto)
                                             <option value="{{ $crypto->id }}">- {{ $crypto->name }} ({{ $crypto->symbol }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Network</label>
                                    <input type="text" name="platform" class="form-control" placeholder="Network" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Tittle</label>
                                    <input type="text" name="tittle" required class="form-control"  placeholder="Wallet Tittle"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Wallet Address</label>
                                    <input type="text" id="pwd" name="wallet_address" class="form-control" placeholder="Wallet Address" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Instruction To User - <small><i>optional</i></small></label>
                                   <textarea name="instruction_to_user" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="form-group">
                            <button  type="submit" class="btn btn-light">Add Crypto</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>

@endsection
