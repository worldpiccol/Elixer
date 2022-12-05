@extends('admin.layouts.app')

@section('title', 'ref_transactions')

@section('content')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Swaps</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Swaps</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Total <span class="text-muted fw-normal ms-2">({{ $swaps->count() }})</span> enteries</h5>
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
                            <th>Swap Ref</th>
                            <th>User</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Provider</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($swaps as $swap)
                        <tr class="">

                            <td>{{ $swap->swap_ref }}</td>
                             <td>
                                    <img src="{{ $swap->user->avarta }}" alt="" class="avatar-sm rounded-circle me-2">
                                    <span class="text-body">{{ $swap->user->name }}</span><br>
                                    <small> {{ $swap->user->email }}</small>
                                </td>
                            <td>
                               <strong>
                                 {{ $swap->fromCrypto->symbol }} <br>
                                <span>{{ $swap->from_amount }}</span>
                               </strong>
                            </td>
                             <td>
                               <strong>
                                 {{ $swap->toCrypto->symbol }} <br>
                                <span>{{ $swap->to_amount }}</span>
                               </strong>
                            </td>
                            <td>{{ $swap->provider }}</td>
                            <td>{{$swap->created_at->diffForHumans() }}</td>
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
