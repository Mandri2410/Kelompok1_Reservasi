@extends('layouts.form')


@section('content')
<div class="container">
    <h2>Edit Reservation</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="customer_name">Customer Name:</label>
            <input type="text" name="customer_name" class="form-control" value="{{ $reservation->customer_name }}" placeholder="Enter Customer Name">
        </div>

        <div class="form-group">
            <label for="room_number">Room Number:</label>
            <input type="text" name="room_number" class="form-control" value="{{ $reservation->room_number }}" placeholder="Enter Room Number">
        </div>

        <div class="form-group">
            <label for="reservation_date">Reservation Date:</label>
            <input type="date" name="reservation_date" class="form-control" value="{{ $reservation->reservation_date }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
