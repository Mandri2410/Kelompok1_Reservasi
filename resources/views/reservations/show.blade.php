@extends('layouts.form')

@section('content')
<div class="container">
    <h2>Show Reservation</h2>

    <div class="form-group">
        <strong>Customer Name:</strong>
        {{ $reservation->customer_name }}
    </div>

    <div class="form-group">
        <strong>Room Number:</strong>
        {{ $reservation->room_number }}
    </div>

    <div class="form-group">
        <strong>Reservation Date:</strong>
        {{ $reservation->reservation_date }}
    </div>

    <a class="btn btn-primary" href="{{ route('reservations.index') }}">Back</a>
</div>
@endsection
