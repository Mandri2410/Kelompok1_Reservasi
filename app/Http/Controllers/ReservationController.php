<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Room;

class ReservationController extends Controller
{
    
    public function index()
    {
        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations'));
        $availableRooms = Reservation::all(); 
        return view('reservations.create', compact('availableRooms'));
    }

    public function create()
    {
        
        $availableRooms = Reservation::all();
        return view('reservations.create', compact('availableRooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'room_number' => 'required',
            'reservation_date' => 'required|date',
        ]);

        Reservation::create($request->all());
        return redirect()->route('reservations.index')
                         ->with('success', 'Reservation created successfully.');
    }

    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'customer_name' => 'required',
            'room_number' => 'required',
            'reservation_date' => 'required|date',
        ]);

        $reservation->update($request->all());
        return redirect()->route('reservations.index')
                         ->with('success', 'Reservation updated successfully.');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')
                         ->with('success', 'Reservation deleted successfully.');
    }
}
