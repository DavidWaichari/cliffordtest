<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flight extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'destination_id',
        'destination_class_id',
        'airline_id',
        'flight_type',
        'no_of_passengers',
        'current_price',
        'departure',
        'arrival',
        'status',
        'extras',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'extras' => 'array',
        'departure' => 'datetime',
        'arrival' => 'datetime',
    ];

    /**
     * Get the destination associated with the flight.
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    /**
     * Get the destination class associated with the flight.
     */
    public function destinationClass()
    {
        return $this->belongsTo(DestinationClass::class);
    }

    /**
     * Get the airline associated with the flight.
     */
    public function airline()
    {
        return $this->belongsTo(Airline::class);
    }
}
