@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 px-6">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($flights as $flight)

            <div class="bg-gray-100 p-6 rounded-xl shadow-md">
                <div class="flex justify-between items-center mb-2">
                    <div class="text-xl font-bold">{{ $flight->code }}</div>
                    <div class="text-sm font-semibold text-gray-700">{{ $flight->departure }} → {{ $flight->arrival }}</div>
                </div>
                <div class="text-sm text-gray-800">
                    <p><strong>Departure</strong><br>{{ \Carbon\Carbon::parse($flight->departure_time)->format('l, d F Y, H:i') }}</p>
                    <p class="mt-2"><strong>Arrived</strong><br>{{ \Carbon\Carbon::parse($flight->arrival_time)->format('l, d F Y, H:i') }}</p>
                </div>
                <div class="mt-4 flex gap-2">
                    <a href="/flights/book/{{ $flight->id }}" class="px-4 py-2 bg-gray-800 text-white text-sm rounded hover:bg-gray-700">Book Ticket</a>
                    <a href="/flights/ticket/{{ $flight->id }}" class="px-4 py-2 bg-gray-300 text-black text-sm rounded hover:bg-gray-400">View Details</a>
                </div>
            </div>

        @endforeach
    </div>


</div>
@endsection
