@extends('user.layouts.app')

@section('title', 'Transactions')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Swap History</h4>

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

                        @foreach ($swaps as $tran)
                        <tr class="border-bottom">

                            <td style="width: 50px;">
                                <div class="font-size-22 text-success">
                                    <i class="bx bx-move-horizontal d-block"></i>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1">{{ $tran->description }}</h5>
                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: {{ $tran->swap_ref }}</span> <span>{{ $tran->created_at->diffForHumans() }}</span></p>
                                </div>
                            </td>

                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0">{{ $tran->from_amount }} {{ $tran->fromCrypto->symbol }}</h5>
                                        <p class="text-muted mb-0 font-size-12"> from amount</p>
                                    </div>
                                </td>


                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0">{{ $tran->to_amount }} {{ $tran->toCrypto->symbol }}</h5>
                                        <p class="text-muted mb-0 font-size-12">to amount</p>
                                    </div>
                                </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div>
                    {!! $swaps->render() !!}
                </div>
            </div>
        </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
