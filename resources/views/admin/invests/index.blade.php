@extends('admin.layouts.app')

@section('title', 'Investments')

@section('content')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Invested Log</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Tottal <span class="text-muted fw-normal ms-2">{{ $investments->count() }}</span> enteries.</h5>
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
                            <th>IVX</th>
                            <th>User</th>
                            <th>Capital</th>
                            <th>Rate</th>
                            <th>Duration</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($investments as $ivx)
                        <tr class="">

                            <td>{{ $ivx->ivx }}</td>
                             <td>
                                    <img src="{{ $ivx->user->avarta }}" alt="" class="avatar-sm rounded-circle me-2">
                                    <span class="text-body">{{ $ivx->user->name }}</span><br>
                                    <small> {{ $ivx->user->email }}</small>
                                </td>
                            <td>
                               <strong>{{ $ivx->amount }} {{ $ivx->currency }}</strong>
                            </td>

                            <td>{{ $ivx->rate }} / {{ $ivx->term_calc }}</td>
                            <td>{{ $ivx->investScheme->terms }} - {{ $ivx->investScheme->term_type }}</td>
                            <td>{{ $ivx->term_start }}</td>
                            <td>{{ $ivx->term_end }}</td>
                            <td>
                                @if ($ivx->status === 'active')
                                     <span class="badge bg-soft-primary text-dark">Active</span> <br>
                                @else
                                     <span class="badge bg-soft-success text-dark">Completed</span> <br>
                                @endif
                            </td>
                            <td>{{ $ivx->created_at->diffForHumans() }}</td>
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
