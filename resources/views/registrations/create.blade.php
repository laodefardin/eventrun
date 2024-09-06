@extends('layouts.app')

@section('title', 'Register for Event')

@section('content')
<h1>Register for {{ $event->name }}</h1>
<form action="{{ route('registrations.store', $event->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="participant_name">Name:</label>
        <input type="text" id="participant_name" name="participant_name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
