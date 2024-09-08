@extends('layouts.admin.app')
@section('title', 'Events')

@section('content')
    <div class="container-fluid p-0">
        <div class="row">

            <div class="col-12">
                <h1 class="h3 mb-3">Events</h1>
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
                                    <th class="align-middle">Name Event</th>
                                    <th class="align-middle">Description</th>
                                    <th class="align-middle">Date</th>
                                    <th class="align-middle">Location</th>
                                    <th class="align-middle">Topic</th>
                                    <th class="align-middle">Price</th>
                                    <th class="align-middle text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                
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