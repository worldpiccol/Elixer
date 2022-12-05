@extends('user.layouts.app')

@section('title', 'Transactions')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Binary Trades</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Binary</a></li>
                    <li class="breadcrumb-item active">Trades</li>
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

                        @forelse ($trades as $trade)

                        <tr class="border-bottom">


                            @if ($trade->trade_outcome === 'fail')

                                <td style="width: 50px;">
                                    <div class="font-size-22 text-danger">
                                        <i class="bx bx-x d-block"></i>
                                    </div>
                                </td>
                            @elseif ($trade->trade_outcome === 'win')
                                <td style="width: 50px;">
                                    <div class="font-size-22 text-success">
                                        <i class="bx bx-check d-block"></i>
                                    </div>
                                </td>
                            @endif

                            <td>
                                <div>
                                    <h5 class="font-size-14 mb-1">{{ $trade->pair }}</h5>
                                    <p class="text-muted mb-0 font-size-12"> <span class="badge bg-light text-dark">ref: {{ $trade->trd_id }}</span> {{ $trade->updated_at->diffForHumans() }}</p>
                                </div>
                            </td>
                                @if ($trade->trade_outcome === 'fail')
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 mb-0 text-center"><span class="badge p-1 bg-soft-danger text-dark">Fail</span></h5>
                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                    </div>
                                </td>
                            @elseif ($trade->trade_outcome === 'win')
                                <td>
                                    <div class="text-end">
                                        <h5 class="font-size-14 text-muted mb-0 text-center"><span class="badge p-1 bg-soft-success text-dark">Won</span></h5>
                                        <p class="text-muted mb-0 text-center font-size-12">outcome</p>
                                    </div>
                                </td>
                            @endif
                            <td>
                                <div class="text-end">
                                    <h5 class="font-size-14 mb-0">{{ round($trade->profit, 5) }} {{ $trade->crypto->symbol }}</h5>
                                    <p class="text-muted mb-0 font-size-12">Profit</p>
                                </div>
                            </td>

                            <td>
                                <div class="text-end">
                                    <h5 class="font-size-14 text-muted mb-0">{{ round($trade->capital, 5) }} {{ $trade->crypto->symbol }}</h5>
                                    <p class="text-muted mb-0 font-size-12">Investment</p>
                                </div>
                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="12">You haven't made any trades yet</td>
                        </tr>

                        @endforelse
                    </tbody>
                </table>
                <div>
                    {!! $trades->render() !!}
                </div>
            </div>
        </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection
