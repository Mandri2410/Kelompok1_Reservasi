@extends('layouts.form')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h1>Create New Reservation</h1>
            </div>
            <div class="card-body">
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
                <form action="{{ route('reservations.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="customer_name">Customer Name:</label>
                        <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Name">
                    </div>
                    <div class="form-group">
                        <label for="room_number">Room Number:</label>
                        <input type="text" name="room_number" class="form-control" placeholder="Enter Room Number">
                    </div>

                    <div class="form-group">
                        <label for="reservation_date">Reservation Date:</label>
                        <input type="date" name="reservation_date" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
