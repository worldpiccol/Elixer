@extends('admin.layouts.app')

@section('title', 'Create Transaction');

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add Transaction</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Transactions</a></li>
                    <li class="breadcrumb-item active">Add Transaction</li>
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
                    <h5 class="card-title mb-4">Add Transaction</h5>
                    <form id="" method="post" action="{{ route('admin.tran.store') }}">
                        @csrf
                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Type</label>

                                      <select class="form-control" name="type" id="">
                                        <option value="credit">Credit</option>
                                        <option value="debit">Debit</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>User Account</label>
                                    <select class="form-control" name="user" id="">
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->user_id }} - {{ $user->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Crypto Wallet</label>
                                    <select class="form-control" name="crypto" id="">
                                        @foreach ($cryptos as $crypto)
                                            <option value="{{ $crypto->id }}">{{ $crypto->symbol }} - {{ $crypto->name }}</option>
                                        @endforeach
                                      </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Amount</label>
                                    <input type="text" name="amount" required class="form-control"  placeholder="Amount"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Description</label>
                                    <input type="text" id="pwd" name="description" class="form-control" placeholder="Transaction Description" />
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="form-group">
                            <button  type="submit" class="btn btn-light">Add Transaction</button>
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
