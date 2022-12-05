@extends('admin.layouts.app')

@section('title', 'Wallet Addresses')

@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Deposit Wallet Addresses</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Wallet Addresses</a></li>
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
            <th scope="col">Name</th>
            <th scope="col">Network</th>
            <th scope="col">Wallet Address</th>
            <th scope="col">Status</th>
            <th style="width: 80px; min-width: 80px;">Action</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($wallets as $wallet)
                <tr>
                    <th scope="row">
                        <div class="form-check font-size-16">
                            <input type="checkbox" class="form-check-input" id="contacusercheck1">
                            <label class="form-check-label" for="contacusercheck1"></label>
                        </div>
                    </th>
                    <td>
                        <img src="{{ $wallet->crypto->image_url }}" alt="" class="avatar-sm rounded-circle me-2">
                        <a href="#" class="text-body">{{ $wallet->tittle }}</a>
                    </td>
                    <td>{{ $wallet->crypto->name }} ({{ $wallet->crypto->symbol }})</td>
                    <td>{{ $wallet->platform }}</td>
                    <td>{{ $wallet->wallet_address }}</td>
                    <td>
                        @if ($wallet->is_locked === 0)
                        <span class="text-success"> Active</span>
                        @else
                        <span class="text-danger">Suspended</span>
                        @endif
                    </td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                 @if ($wallet->is_locked === 0)
                                       <li><a class="dropdown-item" href="{{ route('admin.wallet.status', $wallet->id) }}">Suspend Wallet</a></li>
                                        @else
                                        <li><a class="dropdown-item" href="{{ route('admin.wallet.status', $wallet->id) }}">Enable Wallet</a></li>
                                    @endif

                                <hr>
                                <li><a class="dropdown-item" href="{{ route('admin.wallet.delete', $wallet->id) }}">Delete Wallet</a></li>
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
