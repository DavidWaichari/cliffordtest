<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'flight_id',
        'user_id',
        'no_of_tickets',
        'status',
        'extras'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function flight()
    {
        return $this->belongsTo(Flight::class, 'flight_id');
    }
}
