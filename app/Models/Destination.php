<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Destination extends Model implements HasMedia
{
use HasFactory, InteractsWithMedia;

protected $fillable = [
'name',
'description',
'landmark',
    'price',
    'current_price',
'status',
'extras',
];

protected $appends = ['media_url'];

public function destclasses()
{
    return $this->hasMany(DestinationClass::class, 'destination_id');
}
public function getMediaUrlAttribute()
{
$media = $this->getFirstMedia('images');
return $media ? $media->getUrl() : null;
}
}
