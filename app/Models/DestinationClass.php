<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationClass extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'destination_id',
        'status',
        'extras'
    ];

    /**
     * Get the destination that owns the class.
     */
    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

}
