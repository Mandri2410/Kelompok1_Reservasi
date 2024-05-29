@extends('layouts.app')
@section('head')
    <!-- Include the CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="{{ asset('css/mobile.css') }}">
@endsection
@section('content')
<div class="container">
    <h1>Reservations</h1>
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">Create Reservation</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered mt-2">
        <tr>
            <th>No</th>
            <th>Customer Name</th>
            <th>Room Number</th>
            <th>Reservation Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($reservations as $reservation)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $reservation->customer_name }}</td>
            <td>{{ $reservation->room_number }}</td>
            <td>{{ $reservation->reservation_date }}</td>
            <td>
                <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('reservations.show', $reservation->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('reservations.edit', $reservation->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
