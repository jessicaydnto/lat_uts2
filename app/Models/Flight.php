<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable= [
        'flight_code',
        'origin', 
        'destination',
        'departure_time',
        'arrival_time'
    ];

    public function flights(){ // satu pesawat memiliki banyak tiket
        return $this->hasMany(Ticket::class);

    }
}
