@extends('admin.layouts.app')

@section('title', 'Edit Scheme');

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{ $scheme->name }}</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mt-4">

            <div class="card-body">
                <div>
                    <h5 class="card-title mb-4">Edit Scheme</h5>
                    <form id="" method="post" action="{{ route('admin.iv.update', $scheme->id) }}">
                        @csrf
                        @method('PUT')

                        <input type="hidden"/>
                        <div class="row">
                            <div class="col-xl-4 col-md- crypto-select">
                                <div class="form-group mb-3">
                                    <label>Select Crypto</label>
                                    <select class="form-control" name="crypto_id" id="" required>

                                        @foreach ($cryptos as $crypto)
                                             <option {{ $scheme->crypto_id === $crypto->id ? 'selected' : '' }} value="{{ $crypto->id }}">- {{ $crypto->name }} ({{ $crypto->symbol }})</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Name</label>
                                    <input type="text" required name="name" value="{{ $scheme->name }}" class="form-control" placeholder="Scheme Name" />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Min Ammout <small>(USD)</small></label>
                                    <input type="text" name="min_amount" value="{{ $scheme->min_amount }}"  class="form-control" placeholder="Min Invest Amount" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Max Ammout <small>(USD)</small> <small class="text-info"><i>- Leave empty for unlimited</i></small></label>
                                    <input type="text" name="max_amount" value="{{ $scheme->max_amount }}"  class="form-control" placeholder="Max Invest Amount"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Term Duration</label>
                                    <input type="text" name="terms" value="{{ $scheme->terms }}"  required class="form-control"  placeholder="Investment Term"/>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Terms Type</label>

                                      <select class="form-control" name="term_type" id="" required>
                                        <option  {{ $scheme->term_type === 'hours' ? 'selected' : '' }} value="hours">HOURS</option>
                                        <option  {{ $scheme->term_type === 'days' ? 'selected' : '' }}  value="days">DAYS</option>
                                        <option  {{ $scheme->term_type === 'weeks' ? 'selected' : '' }}  value="weeks">WEEKS</option>
                                        <option  {{ $scheme->term_type === 'months' ? 'selected' : '' }}  value="months">MONTHS</option>
                                        <option  {{ $scheme->term_type === 'years' ? 'selected' : '' }}  value="years">YEARS</option>
                                      </select>

                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Rate</label>
                                    <input type="text" id="pwd" value="{{ $scheme->rate }}"  name="rate" class="form-control" placeholder="Profit Rate" required />
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Rate Type</label>
                                    <select class="form-control" name="rate_type" id="" required>
                                        <option value="percent">Percent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Interest Period</label>
                                    <select class="form-control" name="calc_period" id="" required>
                                        <option   {{ $scheme->calc_period === 'hourly' ? 'selected' : '' }} value="hourly">HOURLY</option>
                                        <option   {{ $scheme->calc_period === 'daily' ? 'selected' : '' }} value="daily">DAILY</option>
                                        <option   {{ $scheme->calc_period === 'weekly' ? 'selected' : '' }} value="weekly">WEEKLY</option>
                                        <option   {{ $scheme->calc_period === 'monthly' ? 'selected' : '' }} value="monthly">MONTHLY</option>
                                        <option   {{ $scheme->calc_period === 'yearly' ? 'selected' : '' }} value="yearly">YEARLY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="form-group mb-3">
                                    <label>Payout Term</label>
                                    <select class="form-control" name="payout" id="" required>
                                        <option value="after-mature">After Mature</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Description - <small><i>optional</i></small></label>
                                   <textarea name="description" class="form-control" id="" cols="30" rows="5">{{ $scheme->description }} </textarea>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="form-group">
                            <button  type="submit" class="btn btn-light">Update Scheme</button>
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
