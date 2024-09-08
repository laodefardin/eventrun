@extends('layouts.admin.app')
@section('title', 'Events')

@section('content')
    <div class="container-fluid p-0">
        <div class="row">

            <div class="col-12">
                <h1 class="h3 mb-3">@yield('title')</h1>
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
                                    <a href="#" id="btnTambahevent" class="btn btn-primary btn-lg"><i
                                            data-lucide="plus"></i> New Event</a>
                                </div>
                            </div>
                        </div>
                        <table id="datatables-orders" class="table w-100">
                            <thead>
                                <tr>
                                    <th class="align-middle">#</th>
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
                                @foreach ($events as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->description }}</td>
                                        <td>{{ date('F j, Y', strtotime($d->date)) }}</td>
                                        <td>{{ $d->location }}</td>
                                        <td>{{ $d->topik }}</td>
                                        <td>Rp. {{ number_format($d->price, 0, ',', '.') }},-</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- Modal create -->
    <div class="modal fade" id="modal-btnTambahevent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body m-3">
                    <form action="/event/store" method="POST" id="frmEvent">
                        @csrf
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label>Event Name</label>
                                        <input type="text" class="form-control" id="event_name" name="event_name">
                                    </div>
                                    <div class="mb-3">
                                        <label>Category</label>
                                        <input type="text" class="form-control" id="category" name="category">
                                    </div>
                                    <div class="mb-3">
                                        <label>Topic</label>
                                        <input type="text" class="form-control" id="topic" name="topic">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label>Date Event</label>
                                        <input type="text" class="form-control" id="date" name="date">
                                    </div>
                                    <div class="mb-3">
                                        <label>Location</label>
                                        <input type="text" class="form-control" id="location" name="location">
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" id="" cols="10" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">File input</label>
                                        <input class="form-control" type="file" id="foto" name="foto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END primary modal -->


@endsection

@push('myscript')
    <script>
        $(function() {
            $('#btnTambahevent').click(function() {
                $('#modal-btnTambahevent').modal("show");
            });

            $('#frmEvent').submit(function() {
                var 
            })
        });

        document.addEventListener('DOMContentLoaded', function() {
            const priceInput = document.getElementById('price');

            priceInput.addEventListener('input', function(e) {
                let value = e.target.value;

                // Hapus karakter non-digit
                value = value.replace(/[^,\d]/g, "");

                // Format angka menjadi format ribuan
                if (value) {
                    value = parseInt(value.replace(/[^,\d]/g, '')).toLocaleString('id-ID');
                }

                // Set value kembali ke input field
                e.target.value = value;
            });
        });

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
            $("#datatables-orders-search").keyup(function() {
                $("#datatables-orders").DataTable().search($(this).val()).draw();
            });
        });
    </script>
@endpush
