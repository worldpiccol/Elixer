@extends('admin.layouts.app')

@section('title', 'Create Binary Scheme');

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">New Binary Scheme</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mt-4">

            <div class="card-body">
                <div>
                    <form id="" method="post" action="{{ route('admin.binary.store') }}">
                        @csrf
                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md- crypto-select">
                                <div class="form-group mb-3">
                                    <label>Select Crypto</label>
                                    <select class="form-control" name="crypto_id" id="" required>

                                        @foreach ($cryptos as $crypto)
                                             <option value="{{ $crypto->id }}">- {{ $crypto->name }} ({{ $crypto->symbol }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" required name="name" class="form-control" placeholder="Scheme Name" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Min Ammout <small>(USD)</small></label>
                                    <input type="text" name="min_amount" class="form-control" placeholder="Min Invest Amount" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Max Ammout <small>(USD)</small> <small class="text-info"><i>- Leave empty for unlimited</i></small></label>
                                    <input type="text" name="max_amount" class="form-control" placeholder="Max Invest Amount"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Term Duration</label>
                                    <input type="text" name="terms" required class="form-control"  placeholder="Investment Term"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Terms Type</label>

                                    <select class="form-control" name="term_type" id="" required>
                                    <option value="sec">SEC</option>
                                    <option value="min">MIN</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Rate <small>(%)</small></label>
                                    <input type="text" id="pwd" name="rate" class="form-control" placeholder="Profit Rate" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Trade Outcome <small class="text-info"><i> - select if trades opened with this scheme should win or fail</i></small></small></label>
                                    <select class="form-control" name="outcome" id="" required>
                                        <option value="win">WIN</option>
                                        <option value="fail">FAIL</option>
                                        <option value="random">RANDOM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Description - <small><i>optional</i></small></label>
                                   <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="form-group">
                            <button  type="submit" class="btn btn-light">Add Binary Scheme</button>
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
