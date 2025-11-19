<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name', 'location', 'description', 'price', 'image'
    ];

    public function reviews() { return $this->hasMany(Review::class); }
    public function bookings() { return $this->hasMany(Booking::class); }
}
