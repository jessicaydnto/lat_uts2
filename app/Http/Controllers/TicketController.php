<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{

    public function create($id){
        $flight= Flight::find($id); // ambil data dulu 
        return view('tickets.book', compact('flight')); 
    }


    public function store(Request $request){ // ketika tombol book tiket dipencet
        $request->validate([
            'flight_id' => 'required|exists:flights,id',
            'passenger_name' => 'required|string|max:255',
            'passenger_phone' => 'required|string|max:20',
            'seat_number' => 'required|string|max:10',
     ]);
     
     Ticket::create([
        'flight_id' => $request->flight_id,
        'passenger_name' => $request->passenger_name,
        'passenger_phone' => $request->passenger_phone,
        'seat_number' => $request->seat_number,
        'is_boarding' => false,
        'boarding_time' => null,
    ]);

    return redirect('/flights/ticket/' . $request->flight_id) ->with('success', 'Tiket berhasil dipesan.');
}

    }

