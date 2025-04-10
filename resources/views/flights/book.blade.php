@extends('layouts.App');

@section('content')
<div class="max-w-2xl mx-auto mt-10 border border-gray-400 p-8 rounded-md shadow-md">

    <div class="flex justify-between items-center border-b pb-4 mb-4">
        <div>
            <h2 class="text-lg font-semibold">Ticket Booking for</h2>
            <p class="text-sm text-gray-700">{{ $flight->origin }} → {{ $flight->destination }}</p>
            <p class="text-sm mt-1"><strong>Departure:</strong> {{ \Carbon\Carbon::parse($flight->departure_time)->format('l, d F Y, H:i') }}</p>
            <p class="text-sm"><strong>Arrived:</strong> {{ \Carbon\Carbon::parse($flight->arrival_time)->format('l, d F Y, H:i') }}</p>
        </div>
        <div class="text-right text-xl font-bold">{{ $flight->code }}</div>
    </div>

    <form action="{{ url('/flights/book/' . $flight->id) }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-semibold mb-1">Passenger Name</label>
            <input type="text" name="passenger_name" required class="w-full px-3 py-2 border rounded bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1">Passenger Phone</label>
            <input type="text" name="passenger_phone" required class="w-full px-3 py-2 border rounded bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1">Seat Number</label>
            <input type="text" name="seat_number" required class="w-full px-3 py-2 border rounded bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-300">
        </div>

        <div class="flex justify-end gap-4 pt-4">
            <a href="{{ url('/flights') }}" class="px-4 py-2 bg-gray-300 hover:bg-gray-400 rounded">Cancel</a>
            <button type="submit" class="px-4 py-2 bg-gray-800 text-white hover:bg-gray-700 rounded">Book Ticket</button>
        </div>

    </form>
</div>

@endsection