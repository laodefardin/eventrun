@extends('layouts.app')

@section('title', 'Payment Event Registration')

@section('content')

    {{-- <script type="text/javascript" src="https://app.stg.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script> --}}

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>

    <div class="p-5 my-5 text-white bg-success">
        <h4 class="text-center mb-0 text-white lh-1">Invoice</h4>
    </div>


    <div class="text-center border-bottom mb-10">
        <div class="col-lg-6 mx-auto">
            <p class="mt-200 mb-1" style="font-size: 30px">Price</p>
            <p class="display-6 fw-bold mt-1">Rp. {{ number_format($order->total_price, 0, ',', '.') }},-</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button id="pay-button" class="btn btn-success btn-md px-4 me-sm-3">{{ $order->payment_status }}</button>
            </div>
        </div>
    </div>

    <div class="border-bottom mt-3">
        <div class="col-lg-6 mx-auto">
            <p class="mt-20 mb-20 text-center" style="font-size: 30px">Detail Review Data Registration</p>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>: {{ $order->participant_name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: {{ $order->email }}</td>
                        </tr>
                        <tr>
                            <td>No Handphone</td>
                            <td>: {{ $order->phone_number }}</td>
                        </tr>
                        <tr>
                            <td>Harga Event</td>
                            <td>: {{ $order->total_price }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:  {{ 'Rp. ' . number_format($order->total_price, 0, ',', '.') . ',-' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('myscript')
       
    @endpush

@endsection
