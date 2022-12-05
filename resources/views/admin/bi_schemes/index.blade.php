@extends('admin.layouts.app')

@section('title', 'Binary Trade Schemes')

@section('content')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Binary Schemes</h4>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title"><small>Total <span class="text-muted fw-normal ">{{ $schemes->count() }}</span> enteries.</small></h5>
        </div>
    </div>
</div>
<!-- end row -->
 <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <div class="mb-4">
                            <a href="{{ route('admin.binary.create') }}" class="btn btn-light waves-effect waves-light"><i class="bx bx-plus me-1"></i> Add Scheme</a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="table-responsive">
                    <table class="table align-middle datatable-2 dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr class="bg-transparent">
                                <th>Crypto Pair</th>
                                <th>Tittle</th>
                                <th>Rate <small>%</small></th>
                                <th>Min <small>Invest</small></th>
                                <th>Max <small>Invest</small></th>
                                <th>Term</th>
                                <th>Term <small>Type</small></th>
                                <th>Trade <small>Outcome</small></th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($schemes as $scheme)
                                <tr>

                                    <td><a href="javascript: void(0);" class="text-dark fw-medium">{{ Str::upper($scheme->slug) }}</a> </td>
                                    <td>
                                        {{ $scheme->name }}
                                    </td>
                                    <td>{{ $scheme->rate }}</td>

                                    <td>
                                        {{ $scheme->min_amount }} <small>USD</small>
                                    </td>
                                    <td>
                                        @if ($scheme->max_amount == 0)
                                            Unlimited
                                        @else
                                            {{ $scheme->max_amount }} <small>USD</small>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $scheme->terms }}
                                    </td>
                                    <td>
                                        {{ $scheme->term_type }}
                                    </td>
                                    <td>
                                        @if ($scheme->outcome === 'win')
                                            <div class="badge badge-soft-success font-size-12">WIN <small>Trade</small></div>
                                        @elseif ($scheme->outcome === 'fail')
                                            <div class="badge badge-soft-danger font-size-12">FAIL <small>Trade</small></div>
                                        @else
                                            <div class="badge badge-soft-warning font-size-12">RANDOM <small>Random outcome</small></div>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($scheme->status === 'active')
                                            <div class="badge badge-soft-success font-size-12">Active</div>
                                        @else
                                            <div class="badge badge-soft-danger font-size-12">Inactive</div>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="{{ route('admin.binary.edit', $scheme->id) }}">Edit Scheme</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.binary.status', $scheme->id) }}">{{ $scheme->status === 'active' ? 'Mark Inactive' : 'Mark Active'}}</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.binary.delete', $scheme->id) }}">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- end table responsive -->
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->


<script>
    $(document).ready(function () { $('.datatable-2').DataTable(); });
</script>
@endsection
