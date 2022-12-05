@extends('admin.layouts.app')

@section('title', 'ref_transactions')

@section('content')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Referral Bonuses</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">ref_transactions</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2">({{ $ref_trans->count() }})</span> enteries</h5>
        </div>
    </div>
</div>
<!-- end row -->

<div class="col-xl-12 mt-5">
    <div class="card">
        <div class="card-body px-0">

            <div class="table-responsive px-3">
                <table class="table datatable align-middle table-nowrap table-borderless">
                    <thead>
                        <tr class="">
                            <th>Ref</th>
                            <th>User</th>
                            <th>Amount</th>
                            <th>Currency</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Desc</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($ref_trans as $ref_tran)
                        <tr class="">
                            <td>
                                <span>{{ $ref_tran->tnx_id }}</span>
                            </td>
                            <td>
                                    <img src="{{ $ref_tran->user->avarta }}" alt="" class="avatar-sm rounded-circle me-2">
                                    <span class="text-body">{{ $ref_tran->user->name }}</span><br>
                                    <small> {{ $ref_tran->user->email }}</small>
                            </td>
                            <td>
                                {{ $ref_tran->total }} <br>
                                @if ($ref_tran->type === 'deposit')
                                        <small> Recieving Address: {{ Str::limit($ref_tran->wallet->wallet_address, $limit = 20, $end = '...')  }}</small>
                                @elseif( $ref_tran->type === 'withdraw')
                                    <small> WD TO: {{ $ref_tran->wd_wallet->address}}</small>

                                @endif
                            </td>
                            <td>{{ $ref_tran->currency }}</td>
                            <td><span class="badge p-1 bg-soft-success text-dark">{{ $ref_tran->type }}</span></td>
                            <td>{{ $ref_tran->created_at->diffForHumans() }}</td>
                            <td>
                                @if ($ref_tran->status  === 'processing')

                                <span class="badge p-1 bg-warning">processing</span>

                                @elseif ($ref_tran->status  === 'completed')
                                <span class="badge p-1 bg-success">completed</span>
                                @endif
                            </td>
                            <td>{{ $ref_tran->description }}</td>
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

<!-- end table responsive -->
  <!-- init js -->
        <script>
            $(document).ready(function () { $('.datatable').DataTable(); });
        </script>
@endsection
