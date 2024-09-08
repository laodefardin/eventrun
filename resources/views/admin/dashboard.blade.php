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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="shopping-bag" class="lucide lucide-shopping-bag align-middle"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                            </div>
                        </div>
                    </div>
                    <span class="h1 d-inline-block mt-1 mb-3">$37.500</span>
                    <div class="mb-0">
                        <span class="badge badge-subtle-success me-2"> 6.25% </span>
                        <span class="text-muted">Since last week</span>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="shopping-cart" class="lucide lucide-shopping-cart align-middle"><circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle><path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path></svg>
                            </div>
                        </div>
                    </div>
                    <span class="h1 d-inline-block mt-1 mb-3">3.282</span>
                    <div class="mb-0">
                        <span class="badge badge-subtle-danger me-2"> -4.65% </span>
                        <span class="text-muted">Since last week</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-3 d-flex">
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Activity</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat stat-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="activity" class="lucide lucide-activity align-middle"><path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path></svg>
                            </div>
                        </div>
                    </div>
                    <span class="h1 d-inline-block mt-1 mb-3">19.312</span>
                    <div class="mb-0">
                        <span class="badge badge-subtle-success me-2"> 8.35% </span>
                        <span class="text-muted">Since last week</span>
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