<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable=[
        'flight_id', 
        'passanger_name', 
        'passanger_phone', 
        'seat_number'
    ];

    public function tickets(){  // satu tiket hanya satu flight
        return $this->belongsTo(Flight::class);
    }

}
