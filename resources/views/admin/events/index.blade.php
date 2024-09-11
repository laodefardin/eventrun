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
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="edit btn btn-sm btn-primary"
                                                    id="{{ $d->id }}"> <i data-lucide="edit"></i></a>
                                                <form action="/event/{{ $d->id }}/delete" method="POST">
                                                    @csrf
                                                    <a class="btn btn-sm btn-danger delete-confirm"><i
                                                            data-lucide="trash"></i></a>
                                                </form>
                                            </div>
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


    <!-- Modal create -->
    <div class="modal fade" id="modal-btnTambahevent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body m-3">
                    <form action="/event/store" method="POST" id="frmEvent" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" id="topik" name="topik">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label>Date Event</label>
                                        <input type="date" class="form-control" id="date" name="date">
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
                                        <textarea name="description" class="form-control" id="description" cols="10" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">File input</label>
                                        <input class="form-control" type="file" id="foto" name="foto">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>

            </div>
        </div>
    </div>
    <!-- END primary modal -->

    {{-- modal edit --}}
    <div class="modal fade" id="modal-btnEditevent" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body m-3" id="loadeditform">
                </div>
            </div>
        </div>
    </div>

@endsection

@push('myscript')
    <script>
        $(function() {
            $('#btnTambahevent').click(function() {
                $('#modal-btnTambahevent').modal("show");
            });

            $('#frmEvent').submit(function() {
                var event_name = $('#event_name').val();
                var category = $('#category').val();
                var topik = $('#topik').val();
                var date_event = $('#date').val();
                var location = $('#location').val();
                var price = $('#price').val();
                var description = $('#description').val();
            })
        });

        $('.edit').click(function() {
            var id = $(this).attr('id');
            $.ajax({
                type: 'POST',
                url: '/event/edit',
                cache: false,
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                },
                success: function(respond) {
                    $("#loadeditform").html(respond);
                }
            });
            $('#modal-btnEditevent').modal('show');
        });

        $('.delete-confirm').click(function(e) {
            var form = $(this).closest('form');
            e.preventDefault();
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Ingin Menghapus Data Ini!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#e06666",
                cencelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Data Berhasil Dihapus.",
                        icon: "success",
                        showConfirmButton: true,
                    });
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const priceInput = document.getElementById('price');

            // Fungsi untuk memformat angka menjadi format ribuan dengan titik
            function formatPrice(value) {
                // Hapus semua karakter non-digit kecuali koma
                value = value.replace(/[^0-9]/g, '');
                return new Intl.NumberFormat('id-ID').format(value);
            }

            // Pasang listener saat input diubah
            priceInput.addEventListener('input', function(e) {
                let value = e.target.value;
                e.target.value = formatPrice(value);
            });

            // Untuk memastikan format benar saat modal edit event dibuka
            $('#modal-btnEditevent').on('shown.bs.modal', function() {
                // Format angka pada nilai awal jika sudah ada nilai di dalam input
                if (priceInput.value) {
                    priceInput.value = formatPrice(priceInput.value);
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            $("#datatables-orders").DataTable({
                destroy: true,
                responsive: true,
                // order: [
                //     [1, "asc"]
                // ],
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
