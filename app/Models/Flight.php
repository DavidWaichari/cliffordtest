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

    protected $appends = [
        'discount',
        'formatted_dates',
        'destination',
        'airline',
        'destination_class'
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

    public function getDiscountAttribute()
    {
        $original_price = DestinationClass::find($this->destination_class_id)->price;
        $current_price = $this->current_price;
        $discount = 0;
        if ($current_price < $original_price){
            //%discount
            $discount = ($original_price - $current_price) / $original_price * 100;
        }
        return $discount;
    }

    public function getFormattedDatesAttribute()
    {
        $departure = $this->departure;
        $arrival = $this->arrival;

        $duration = $departure->diff($arrival);

        $hours = $duration->h;
        $minutes = $duration->i;

        return [
            'departure' => $departure->format('d M Y, g:i a'),
            'arrival' => $arrival->format('d M Y, g:i a'),
            'duration' => "{$hours}H {$minutes}M",
        ];
    }

    public function getDestinationAttribute()
    {
        return $this->destination()->first();
    }

    public function getAirlineAttribute()
    {
        return $this->airline()->first();
    }

    public function getDestinationClassAttribute()
    {
        return $this->destinationClass()->first();
    }
}
