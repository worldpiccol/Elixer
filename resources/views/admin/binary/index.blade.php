@extends('admin.layouts.app')

@section('title', 'Binary Trades')

@section('content')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Binary Trade Log</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2">{{ $trades->count() }}</span> enteries.</h5>
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
                            <th>Trade ID</th>
                            <th>User</th>
                            <th>Pair</th>
                            <th>Outcome</th>
                            <th>Start Price</th>
                            <th>End Price</th>
                            <th>Duration</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($trades as $trade)
                        <tr class="">

                            <td>{{ $trade->trd_id }}</td>
                             <td>
                                    <img src="{{ $trade->user->avarta }}" alt="" class="avatar-sm rounded-circle me-2">
                                    <span class="text-body">{{ $trade->user->name }}</span><br>
                                    <small> {{ $trade->user->email }}</small>
                                </td>
                            <td>
                               <strong>{{ $trade->pair }}</strong>
                            </td>

                            <td class="text-center">
                                @if ($trade->trade_outcome === 'win')
                                    <span class="badge bg-soft-success text-dark">Win</span> <br>
                                    <strong>{{ round($trade->profit, 6) }} {{ $trade->crypto->symbol }}</strong>
                                @endif

                                @if ($trade->trade_outcome === 'fail')
                                    <span class="badge bg-soft-danger text-dark">Fail</span>
                                @endif
                            </td>
                            <td>{{ $trade->start_price }}</td>
                            <td>{{ $trade->end_price }}</td>
                            <td>{{ $trade->term }} {{ $trade->term_type }}<span></span></td>
                            <td>{{ $trade->created_at->diffForHumans() }}</td>
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

<!-- end table responsive -->
  <!-- init js -->
        <script>
            $(document).ready(function () { $('.datatable').DataTable(); });
        </script>
@endsection
