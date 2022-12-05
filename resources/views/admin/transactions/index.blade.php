@extends('admin.layouts.app')

@section('title', 'Transactions')

@section('content')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Transactions</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Transactions</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2">({{ $trans->count() }})</span> enteries</h5>
        </div>
    </div>


</div>
<!-- end row -->

 <div class="col-xl-12 mt-5">
        <div class="card">
            {{-- <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">trans</h4>
            </div><!-- end card header --> --}}

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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($trans as $tran)
                            <tr class="">
                                <td>
                                    <span>{{ $tran->tnx_id }}</span>
                                </td>
                                <td>
                                        <img src="{{ $tran->user->avarta }}" alt="" class="avatar-sm rounded-circle me-2">
                                        <span class="text-body">{{ $tran->user->name }}</span><br>
                                        <small> {{ $tran->user->email }}</small>
                                </td>
                                <td>
                                    {{ $tran->total }} <br>
                                    @if ($tran->type === 'deposit')
                                          <small> Recieving Address: {{ Str::limit($tran->wallet->wallet_address, $limit = 20, $end = '...')  }}</small>
                                    @elseif( $tran->type === 'withdraw')
                                     <small> WD TO: {{ $tran->wd_wallet->address}}</small>

                                    @endif
                                </td>
                                <td>{{ $tran->currency }}</td>
                                <td><span class="badge p-1 bg-soft-success text-dark">{{ $tran->type }}</span></td>
                                <td>{{ $tran->created_at->diffForHumans() }}</td>
                                <td>
                                    @if ($tran->status  === 'processing')

                                    <span class="badge p-1 bg-warning">processing</span>

                                    @elseif ($tran->status  === 'completed')
                                    <span class="badge p-1 bg-success">completed</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                @if ($tran->status  === 'processing')

                                    <a class="btn btn-soft-success sm" href="{{ route('admin.tran.approve', $tran->id) }}">{{ $tran->type === 'withdraw' ? 'Confirm' : 'Approve'}}</a>

                                    @elseif ($tran->status  === 'completed')
                                    <span class=""><i>complete</i><span>
                                    @endif
                                </td>
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
