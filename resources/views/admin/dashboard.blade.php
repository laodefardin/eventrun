@extends('layouts.admin.app')
@section('title','Dashboard Event Run')

@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Dashboard</h1>

    <div class="row">
        <div class="col-md-6 col-xxl-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Income</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat stat-sm">
                                <i class="align-middle" data-lucide="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                    <span class="h1 d-inline-block mt-1 mb-3">Rp {{ number_format($totalPaidPrice, 0, ',', '.') }}</span>
                    <div class="mb-0">
                        {{-- <span class="badge badge-subtle-success me-2"> 6.25% </span> --}}
                        <span class="text-muted">Total Paid</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Orders</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat stat-sm">
                                <i class="align-middle" data-lucide="shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                    <span class="h1 d-inline-block mt-1 mb-3">{{ $totalPaidOrders }}</span>
                    <div class="mb-0">
                        {{-- <span class="badge badge-subtle-danger me-2"> -4.65% </span> --}}
                        <span class="text-muted">Order Status Paid</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Order UnPaid</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat stat-sm">
                                <i class="align-middle" data-lucide="activity"></i>
                            </div>
                        </div>
                    </div>
                    <span class="h1 d-inline-block mt-1 mb-3">{{ $totalUnPaidOrders }}</span>
                    <div class="mb-0">
                        {{-- <span class="badge badge-subtle-success me-2"> 8.35% </span> --}}
                        <span class="text-muted">Order Status UnPaid</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 d-flex">
            <div class="card illustration flex-fill">
                <div class="card-body p-0 d-flex flex-fill">
                    <div class="row g-0 w-100">
                        <div class="col-6">
                            <div class="illustration-text p-3 m-1">
                                <h4 class="illustration-text">Welcome Back, Chris!</h4>
                                <p class="mb-0">AppStack Dashboard</p>
                            </div>
                        </div>
                        <div class="col-6 align-self-end text-end">
                            <img src="{{ asset('appstack/img/illustrations/social.png') }}" alt="Social" class="img-fluid illustration-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Empty card</h5>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

</div>
@endsection