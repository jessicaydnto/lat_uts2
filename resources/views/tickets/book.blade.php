@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Ticket Booking for {{ $flight->code }}</h2>
    <p class="text-sm mb-2">{{ $flight->departure }} → {{ $flight->arrival }}</p>
    <p class="text-sm text-gray-600 mb-4">
        Departure: <strong>{{ \Carbon\Carbon::parse($flight->departure_time)->format('l, d F Y, H:i') }}</strong><br>
        Arrival: <strong>{{ \Carbon\Carbon::parse($flight->arrival_time)->format('l, d F Y, H:i') }}</strong>
    </p>

    <form method="POST" action="{{ url('/ticket/submit') }}">
        @csrf
        <input type="hidden" name="flight_id" value="{{ $flight->id }}">

        <div class="mb-4">
            <label class="block text-sm font-medium">Passenger Name</label>
            <input type="text" name="name" required class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Passenger Phone</label>
            <input type="text" name="phone" required class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium">Seat Number</label>
            <input type="text" name="seat_number" required class="w-full border rounded p-2">
        </div>

        <div class="flex justify-between">
            <a href="/flights" class="px-4 py-2 bg-gray-400 text-white rounded">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Book Ticket</button>
        </div>
    </form>
</div>
@endsection
