<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image_url', 'event_date', 'venue_id', 'amount'];

    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
    
    protected $casts = [
        'event_date' => 'datetime',
    ];
}