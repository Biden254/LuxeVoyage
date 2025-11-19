<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'package_id' => 'required',
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'travel_date' => 'required|date',
            'people' => 'required|integer'
        ]);

        Booking::create($data);

        return back()->with('success', 'Booking received! LuxeVoyage will contact you soon.');
    }
}
