<?php

namespace App\Http\Controllers;

use App\Models\Package;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get();
        return view('home.index', compact('packages'));
    }

    public function show($id)
    {
        $package = Package::with('reviews')->findOrFail($id);
        return view('packages.show', compact('package'));
    }
}
