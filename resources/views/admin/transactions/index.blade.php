@extends('layouts.admin.app')
@section('title', 'Transactions')

@section('content')
    <div class="container-fluid p-0">
        <div class="row">

            <div class="col-12">
                <h1 class="h3 mb-3">Transactions</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6 col-xl-4 mb-2 mb-md-0">
                                <div class="input-group input-group-search">
                                    <input type="text" class="form-control" id="datatables-orders-search"
                                        placeholder="Search orders…">
                                    <button class="btn" type="button">
                                        <i class="align-middle" data-lucide="search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-8">
                                <div class="text-sm-end">
                                    <button type="button" class="btn btn-light btn-lg me-2"><i data-lucide="download"></i>
                                        Export</button>
                                </div>
                            </div>
                        </div>
                        <table id="datatables-orders" class="table w-100">
                            <thead>
                                <tr>
                                    <th class="align-middle">
                                        <div class="form-check fs-4">
                                            <input class="form-check-input" type="checkbox"
                                                id="datatables-orders-check-all">
                                            <label class="form-check-label" for="datatables-orders-check-all"></label>
                                        </div>
                                    </th>
                                    <th class="align-middle">Order ID</th>
                                    <th class="align-middle">Registration Date</th>
                                    <th class="align-middle">Event</th>
                                    <th class="align-middle">Participant Name</th>
                                    <th class="align-middle">Email & No Handphone</th>
                                    <th class="align-middle">Total Price</th>
                                    <th class="align-middle">Payment Status</th>
                                    <th class="align-middle text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $d)
                                    
                                <tr>
                                    <td>
                                        <div class="form-check fs-4">
                                            <input class="form-check-input" type="checkbox">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <strong>#{{ $d->id }}</strong><br>
                                    </td>
                                    <td>{{ date("F j, Y", strtotime($d->registration_date)) }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->participant_name }}</td>
                                    <td>
                                        <i class="align-middle" data-lucide="mail"></i> 
                                        {{ $d->email }} <br>
                                        <i class="align-middle" data-lucide="phone"></i> {{ $d->phone_number }}
                                    </td>
                                    <td>Rp. {{ number_format($d->total_price, 0, ',', '.') }},-</td>
                                    <td>
                                        @if($d->payment_status == 'Paid')
                                            <span class="badge badge-subtle-success">Paid</span>
                                        @else
                                            <span class="badge badge-subtle-danger">Not Paid</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <button type="button" class="btn btn-danger btn-sm"><i class="align-middle" data-lucide="trash"></i> </button>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@push('myscript')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        $("#datatables-orders").DataTable({
            destroy: true,
            responsive: true,
            order: [
                [1, "asc"]
            ],
            pageLength: 10,
            columnDefs: [{
                    targets: 0,
                    orderable: false,
                    width: "18px"
                },
                {
                    targets: 7,
                    orderable: false
                }
            ],
            layout: {
                topStart: null,
                topEnd: null,
                bottomStart: 'info',
                bottomEnd: 'paging'
            }
        });
        $("#datatables-orders-check-all").click(function() {
            if ($(this).prop("checked")) {
                $("input[type='checkbox']").prop("checked", true);
            } else {
                $("input[type='checkbox']").prop("checked", false);
            }
        });
        $("#datatables-orders-search").keyup(function() {
            $("#datatables-orders").DataTable().search($(this).val()).draw();
        });
    });
</script>
@endpush