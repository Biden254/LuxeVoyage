<?php

class Review extends Model
{
    protected $fillable = [
        'package_id', 'name', 'rating', 'comment'
    ];

    public function package() { return $this->belongsTo(Package::class); }
}

