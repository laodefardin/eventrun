@extends('layouts.app')

@section('title', $event->name)

@section('content')
<h1>{{ $event->name }}</h1>
<p><strong>Description:</strong> {{ $event->description }}</p>
<p><strong>Date:</strong> {{ $event->date }}</p>
<p><strong>Location:</strong> {{ $event->location }}</p>
<p><strong>Price Tiket:</strong> {{ 'Rp ' . number_format($event->price, 0, ',', '.') }}</p>

<form action="{{ route('registrations.store', $event->id ) }}" method="POST">
    @csrf
    <!-- Form fields for registration -->
    {{-- <input type="hidden" value="{{ $event->price }}" name="total_price">
    <input type="hidden" value="{{ $event->date }}" name="registration_date">
    <input type="hidden" value="{{ $event->id }}" name="event_id"> --}}

    <div class="form-group">
        <label for="participant_name">Name</label>
        <input type="text" class="form-control" id="participant_name" name="participant_name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
    </div>
    <button type="submit" class="btn btn-success mt-4">Register for this Event</button>
</form>
@endsection
