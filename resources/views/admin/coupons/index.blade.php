@extends('admin.layouts.app')

@section('title', 'Reward Coupons')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Coupons</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Reward Center</a></li>
                    <li class="breadcrumb-item active">Manage Wallets</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<!-- end row -->


    <table class="table align-middle datatable dt-responsivetable-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
        <thead>
            <tr>
            <th scope="col" style="width: 50px;">
                <div class="form-check font-size-16">
                    <input type="checkbox" class="form-check-input" id="checkAll">
                    <label class="form-check-label" for="checkAll"></label>
                </div>
            </th>
            <th scope="col">Tittle</th>
            <th scope="col">Code</th>
            <th scope="col">Type</th>
            <th scope="col">Amount</th>
            <th scope="col">Credit To</th>
            <th scope="col">Status</th>
            <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($coupons as $coupon)
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        <a href="#" class="text-body">{{ $coupon->name }}</a>
                    </td>
                    <td><strong>{{ $coupon->code }}</strong></td>
                    <td>{{ $coupon->reward_type }} @if ($coupon->reward_type === 'single-user') <small><i> - {{ $coupon->user->name }}</i></small> @endif</td>
                    <td>{{ floatval($coupon->amount) }} <strong><small>{{ $coupon->reward_currency }}</small></strong></td>
                    <td>{{ $coupon->credit_reward_to }}  @if ($coupon->credit_reward_to === 'crypto-balance') <small><i> - {{ $coupon->crypto->symbol }}</i></small> @endif</td>
                    <td>
                        @if ($coupon->is_claimed === 0)
                        <span class="text-success"> Active</span>
                        @else
                        <span class="text-danger">Claimed</span>
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">

                                <li><a class="dropdown-item" href="{{ route('admin.coupon.delete', $coupon->id) }}">Delete Coupon Code</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @empty

            @endforelse

        </tbody>
    </table>
    <!-- end table -->

<!-- end table responsive -->
  <!-- init js -->
        <script>
            $(document).ready(function () { $('.datatable').DataTable(); });
        </script>
@endsection
