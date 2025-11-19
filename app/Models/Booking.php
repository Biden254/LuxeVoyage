<?php

class Booking extends Model
{
    protected $fillable = [
        'package_id', 'full_name', 'email', 'phone',
        'travel_date', 'people', 'status'
    ];

    public function package() { return $this->belongsTo(Package::class); }
}
