<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_id' => 'required',
            'name'       => 'required',
            'rating'     => 'required|integer|min:1|max:5',
            'comment'    => 'required'
        ]);

        Review::create($validated);

        return back()->with('success', 'Review added!');
    }
}

