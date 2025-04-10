<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index(){
        $flights= Flight::all(); // ambil data dari model
        return view('flights.index', compact('flights')); // kirim ke view
    }

    public function book($id){
        $flight= Flight::find($id);
        return view('flights.book', compact('flight'));
    }



}
