<?php

namespace Database\Seeders;

use App\Models\Flight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::insert([
            [
                'flight_code' => 'GA100',
                'origin' => 'JKT', 
               'destination' => 'CGK',
               'departure_time' => '2025-04-12 07:30:00',
               'arrival_time' => '2025-04-12 10:00:00'
            ], 

            [
                'flight_code' => 'JT100',
                'origin' => 'SBY', 
               'destination' => 'SGP',
               'departure_time' => '2025-02-10 10:30:00',
               'arrival_time' => '2025-02-10 12:30:00'
            ], 

            [
                'flight_code' => 'JD50',
                'origin' => 'BGK', 
               'destination' => 'KAL',
               'departure_time' => '2025-02-22 11:30:00',
               'arrival_time' => '2025-02-22 15:00:00'
            ]       
        ]);

    }
}
