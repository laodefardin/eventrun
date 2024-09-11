<form action="/event/{{ $event->id }}/update" method="POST" id="frmEvent" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
        <div class="row">
            <input type="hidden" name="id" value="{{ $event->id }}">
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <label>Event Name</label>
                    <input type="text" class="form-control" id="event_name" name="event_name"
                        value="{{ $event->name }}">
                </div>
                <div class="mb-3">
                    <label>Category</label>
                    <input type="text" class="form-control" id="category" name="category"
                        value="{{ $event->categori }}">
                </div>
                <div class="mb-3">
                    <label>Topic</label>
                    <input type="text" class="form-control" id="topik" name="topik"
                        value="{{ $event->topik }}">
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="mb-3">
                    <label>Date Event</label>
                    <input type="date" class="form-control" id="date" name="date"
                        value="{{ $event->date }}">
                </div>
                <div class="mb-3">
                    <label>Location</label>
                    <input type="text" class="form-control" id="location" name="location"
                        value="{{ $event->location }}">
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="text" class="form-control" id="price" name="price"
                        value="{{ number_format($event->price, 0, ',', '.') }}">

                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" id="description" cols="10" rows="3">{{ $event->description }}</textarea>
                </div>
                <div class="mb-3">
                    @php
                        $path = Storage::url('upload/events/' . $event->img);
                    @endphp
                    <label class="form-label">Upload Image</label>
                    <div class="d-flex align-items-center">
                        @if (@empty($event->img))
                            <img src="{{ asset('assets/img/no-image.png') }}" alt=""
                                style="width: 100px; height: auto; padding: 5px;">
                        @else
                            <img src="{{ url($path) }}" alt="Current Image" class="me-3"
                                style="width: 100px; height: auto; border: 1px solid #ddd; padding: 5px;">
                        @endempty

                        <!-- Input file untuk upload gambar baru -->
                        <input type="hidden" value="{{ $event->img }}" id="old_foto" name="old_foto">
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

@push('myscript')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const priceInput = document.getElementById('price');

    // Fungsi untuk memformat angka menjadi format ribuan dengan titik
    function formatPrice(value) {
        // Hapus semua karakter non-digit
        value = value.replace(/[^0-9]/g, '');
        // Kembalikan angka yang diformat
        return new Intl.NumberFormat('id-ID').format(value);
    }

    // Pasang listener saat input diubah
    if (priceInput) {
        priceInput.addEventListener('input', function(e) {
            let value = e.target.value;
            e.target.value = formatPrice(value);
        });
    }

    // Event listener untuk memastikan format benar saat modal edit event dibuka
    $('#editEventModal').on('shown.bs.modal', function () {
        // Pastikan input price tersedia dan format nilai awalnya
        if (priceInput && priceInput.value) {
            priceInput.value = formatPrice(priceInput.value);
        }
    });
});
</script>
@endpush
