@extends('user.layouts.app')

@section('title', 'Transactions')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Transactions</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Account</a></li>
                    <li class="breadcrumb-item active">Transactions</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
 <div class="row mt-5">
    <div class="col-12">
    <div class="card">

        <div class="card-body px-0">

            <div class="table-responsive px-3">
                <table class="table table-all align-middle table-nowrap table-borderless">
                    <tbody>

                        @foreach ($trans as $tran)
                        <tr class="border-bottom">
                            @if ($tran->type ==='deposit')
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-success">
                                        <i class="bx bx-down-arrow-circle d-block"></i>
                                    </div>
                                </td>
                            @elseif($tran->type ==='credit')
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-success">
                                        <i class="bx bx-right-arrow-circle d-block"></i>
                                    </div>
                                </td>
                             @elseif($tran->type ==='debit')
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-danger">
                                        <i class="bx bx-left-arrow-circle d-block"></i>
                                    </div>
                                </td>
                            @elseif($tran->type ==='rewards')
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-success">
                                        <i class="bx bx-right-arrow-circle d-block"></i>
                                    </div>
                                </td>
                            @else

                                <td style="width: 50px;">
                                    <div class="font-size-22 text-warning">
                                        <i class="bx bx-up-arrow-circle d-block"></i>
                                    </div>
                                </td>

                            @endif

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1">{{ Str::ucfirst($tran->type) }}</h5>
                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: {{ $tran->tnx_id }}</span> <span>{{ $tran->completed_at ?? $tran->created_at->diffForHumans() }}</span></p>
                                </div>
                            </td>

                            @if ($tran->balance_id !== null)
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0">{{ round($tran->amount, 4)  }} {{ $tran->crypto->symbol }}</h5>
                                        <p class="text-muted mb-0 font-size-12"> {{ $tran->crypto->symbol }} Wallet</p>
                                    </div>
                                </td>

                            @else
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0">{{$tran->amount }} USD</h5>
                                        <p class="text-muted mb-0 font-size-12">Main Balance</p>
                                    </div>
                                </td>
                            @endif
                            @if ($tran->status === 'processing')
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-warning text-muted mb-0">{{ $tran->status }}</h5>
                                        <p class="text-muted mb-0 font-size-12">{{ $tran->created_at }}</p>
                                    </div>
                                </td>
                            @elseif($tran->status === 'completed')
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-success text-muted mb-0">{{ $tran->status }}</h5>
                                        <p class="text-muted mb-0 font-size-12">{{ $tran->completed_at }}</p>
                                    </div>
                                </td>
                            @elseif($tran->status === 'confirmed')
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-info text-muted mb-0">{{ $tran->status }}</h5>
                                        <p class="text-muted mb-0 font-size-12">{{ $tran->confirmed_at }}</p>
                                    </div>
                                </td>
                            @elseif($tran->status === 'canceled')
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 badge bg-soft-danger text-muted mb-0">{{ $tran->status }}</h5>
                                        <p class="text-muted mb-0 font-size-12">{{ $tran->updated_at }}</p>
                                    </div>
                                </td>
                            @endif

                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div>
                    {!! $trans->render() !!}
                </div>
            </div>
        </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
